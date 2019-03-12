<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \GuzzleHttp\Client;

class LogisticController extends Controller
{
    public function __construct()
    {
        $this->client = new Client(['base_uri' => 'http://192.168.0.37:8000/api/']);
        $response = $this->client->request('POST', 'login', [
            'form_params' => [
                'email' => 'nuzul7@gmail.com',
                'password' => 'qwe123',
            ]
        ]);
        $token = $response->getBody()->getContents();
        $this->headers = [
            'Authorization' => 'Bearer ' . $token,        
            'Accept'        => 'application/json',
        ];
    }

    public function app(Request $request){

	 	$logistic1 = $this->client->request('GET', 'logistic', [
	 		'headers' => $this->headers
	 	]);
	 	$logistic = json_decode($logistic1->getBody()->getContents(),true);
	 	return view('Admin.logistik.index')->with('logistic', $logistic);
	}

	public function add()
	{
		return view('Admin.logistik.add');
	}

	public function post(Request $request)
    {
    	$logistic = $this->client->request('POST', 'logistic', [
    		'headers' => $this->headers,
            'form_params' => [
                'kode' => $request->input('kode'),
                'tipe' => $request->input('tipe'),
                'jumlah' => $request->input('jumlah')
            ],
        ]);
        return redirect(url('admin/logistic/index'));
    }

    public function edit($id)
    {
    	$logistic1 = $this->client->request('GET', 'logistic/'.$id,[
            'headers' => $this->headers
        ]);
        $logistic = json_decode($logistic1->getBody()->getContents(),true);
        return view('Admin.logistik.edit')->with('logistic', $logistic);
    }

    public function update(Request $request)
    {
    	$logistic = $this->client->request('PUT', 'logistic/'.$request->id,[
    		'headers' => $this->headers,
            'form_params' => [
                'kode' => $request->input('kode'),
                'tipe' => $request->input('tipe'),
                'jumlah' => $request->input('jumlah')
            ],
        ]);
		return redirect(url('admin/logistic/index'));
    }

    public function delete($id)
    {
    	$logistic = $this->client->request('DELETE', 'logistic/'.$id,[
			'headers' => $this->headers
		]);
		return redirect(url('admin/logistic/index'));
    }
}
