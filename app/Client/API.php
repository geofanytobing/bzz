<?php

declare(strict_types=1);

namespace App\Client;

use GuzzleHttp\Client;
use GuzzleHttp\Exception\RequestException;
use Illuminate\Auth\Access\AuthorizationException;
use Psr\Http\Message\ResponseInterface;
use Symfony\Component\HttpFoundation\File\UploadedFile;

/**
 */
class API
{
	/**
	 * @const string
	 */
	public static $URL = 'http://192.168.0.71';

	/**
	 * @const string
	 */
	const VERSION = 'v1';

	/**
	 * @var Client
	 */
	private $client;

	/**
	 * @var mixed
	 */
	private $user;

	/**
	 * @var object
	 */
	private $pagination;

	/**
	 * Constructor.
	 */
	public function __construct()
	{
		$this->client = new Client(array('base_uri' => API::$URL));
	}

	/**
	 * @param string $path
	 *
	 * @return mixed
	 */
	public static function getUrl($path)
	{
		$path = sprintf('%s/%s', API::VERSION, ltrim($path, '/'));

		return sprintf('%s/%s', self::$URL, $path);
	}

	/**
	 * @param string $email
	 * @param string $password
	 *
	 * @return mixed|null
	 * @throws AuthorizationException
	 * @throws \Exception
	 * @throws \GuzzleHttp\Exception\GuzzleException
	 */
	public function login($email, $password)
	{
		$response = $this->post('auth', array('email' => $email, 'password' => $password));
		if (is_object($response)) {
			$this->setToken($response->token);

			return $this->gdetUser();
		}

		return null;
	}

	/**
	 * @param string $token
	 *
	 * @throws AuthorizationException
	 */
	public function setToken($token)
	{
		$parts = explode('.', $token);
		$decoded = $this->decode($parts[1]);
		if (!in_array($decoded->type, array(1))) {
			throw new AuthorizationException('You don\'t have permission to access this page.');
		}

		\Session::put('token', $token);
		\Session::put('user_id', $decoded->sub);
		\Session::put('type', $decoded->type);
	}

	/**
	 * @return string
	 */
	public function getToken()
	{
		return \Session::get('token');
	}

	/**
	 * @return string
	 */
	public function getUserId()
	{
		return \Session::get('user_id');
	}

	/**
	 * Clear token
	 */
	public function clearToken()
	{
		\Session::forget('token');
		\Session::forget('user_id');
	}

	/**
	 * @return mixed
	 * @throws \GuzzleHttp\Exception\GuzzleException
	 */
	public function getUser()
	{
		if (null !== $this->user) {
			return $this->user;
		}

		return $this->user = $this->get(sprintf('%ss/%s', $this->getType(), $this->getUserId()));
	}

	public function getType()
	{
		return \Session::get('type');
	}

	/**
	 * @param string $path
	 * @param array  $params
	 *
	 * @return mixed
	 * @throws \Exception
	 * @throws \GuzzleHttp\Exception\GuzzleException
	 */
	public function get($path, array $params = array())
	{
		return $this->data($this->request($path, 'GET', $params));
	}

	/**
	 * @param string $path
	 * @param array  $params
	 * @param array  $files
	 *
	 * @return mixed
	 * @throws \Exception
	 * @throws \GuzzleHttp\Exception\GuzzleException
	 */
	public function post($path, array $params = array(), array $files = array())
	{
		return $this->data($this->request($path, 'POST', $params, $files));
	}

	/**
	 * @param string $path
	 * @param array  $params
	 * @param array  $files
	 *
	 * @return mixed
	 * @throws \Exception
	 * @throws \GuzzleHttp\Exception\GuzzleException
	 */
	public function patch($path, array $params = array(), array $files = array())
	{
		return $this->data($this->request($path, 'PATCH', $params, $files));
	}

	/**
	 * @param string $path
	 * @param array  $params
	 *
	 * @return mixed
	 * @throws \Exception
	 * @throws \GuzzleHttp\Exception\GuzzleException
	 */
	public function delete($path, array $params = array())
	{
		return $this->data($this->request($path, 'DELETE', $params));
	}

	/**
	 * @param string $path
	 * @param string $method
	 * @param array  $params
	 *
	 * @return mixed
	 * @throws \GuzzleHttp\Exception\GuzzleException
	 */
	public function send($path, $method, array $params = array())
	{
		return $this->response($this->request($path, $method, $params));
	}

	/**
	 * @param       $path
	 * @param       $method
	 * @param array $params
	 * @param array $files
	 *
	 * @return mixed|null|ResponseInterface
	 * @throws \GuzzleHttp\Exception\GuzzleException
	 */
	public function request($path, $method, array $params = array(), array $files = array())
	{
		$options = array();
		$tmpFiles = array();

		if (\Session::get('token')) {
			$options['headers'] = array(
				'Authorization' => sprintf('Bearer %s', \Session::get('token')),
			);
		}

		switch ($method) {
			case 'DELETE':
			case 'GET':
				$options['query'] = $params;
				break;
			default:
				if (empty($files)) {
					$options['form_params'] = $params;
				} else {
					$options['multipart'] = array();
					foreach ($params as $name => $value) {
						$options['multipart'][] = array(
							'name'     => $name,
							'contents' => (string) $value,
						);
					}

					foreach ($files as $name => $file) {
						if ($file instanceof UploadedFile) {
							$filename = $file->getClientOriginalName();
							$newFilename = sprintf('%s.%s', uniqid(), $file->getClientOriginalExtension());
							$filePath = storage_path('tmp');
							$file->move($filePath, $newFilename);
							$file = $filePath . '/' . $newFilename;
							$tmpFiles[] = $file;
						} else {
							$filename = pathinfo($file, PATHINFO_BASENAME);
						}

						if(null !== $file) {
							$options['multipart'][] = array(
								'name'     => $name,
								'filename' => $filename,
								'contents' => fopen($file, 'r'),
							);
						}
					}
				}
		}

		$path = sprintf('%s/%s', API::VERSION, ltrim($path, '/'));

		try {
			$response = $this->client->request($method, $path, $options);
		} catch (RequestException $e) {
			$response = $e->getResponse();
		}

		foreach ($tmpFiles as $tmpFile) {
			@unlink($tmpFile);
		}

		return $response;
	}

	/**
	 * @param string $path
	 * @param array  $params
	 *
	 * @return string
	 */
	public function getApiUrl($path = '', array $params = array())
	{
		$path = rtrim(sprintf('%s/%s/%s', API::$URL, API::VERSION, ltrim($path, '/')), '/');
		if (!empty($params)) {
			$path .= sprintf('?%s', http_build_query($params));
		}

		return $path;
	}

	/**
	 * @return object
	 */
	public function getLastPagination()
	{
		return $this->pagination;
	}

	/**
	 * @param ResponseInterface $response
	 *
	 * @return object|object[]
	 */
	private function response(ResponseInterface $response)
	{
		$content = (string) $response->getBody();
		$code = $response->getStatusCode();
		$headers = $response->getHeaders();

		return response($content, $code, $headers);
	}

	/**
	 * @param ResponseInterface $response
	 *
	 * @return null|object|\object[]
	 * @throws \Exception
	 */
	private function data(ResponseInterface $response)
	{
		$object = json_decode((string) $response->getBody());

		if (isset($object->errors)) {
			throw new \Exception(implode('. ', $object->errors));
		}

		if (isset($object->pagination)) {
			$this->pagination = $object->pagination;
		}

		if (isset($object->data)) {
			return $object->data;
		}

		return null;
	}

	/**
	 * @param string $encoded
	 *
	 * @return object
	 */
	private function decode($encoded)
	{
		$decoded = base64_decode(str_replace(array('-', '_'), array('+', '/'), $encoded));

		return json_decode($decoded);
	}
}