<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \GuzzleHttp\Client;

class ProfileController extends Controller
{
    public function __construct()
    {
        $this->client = new Client(['base_uri' => 'http://192.168.0.83:8000/api/']);
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

	 	$profile1 = $this->client->request('GET', 'profile', [
	 		'headers' => $this->headers
	 	]);
	 	$profile = json_decode($profile1->getBody()->getContents(),true);
	 	return view('Admin.profile')->with('profile', $profile);
	}

	public function edit($id)
    {
    	$profile1 = $this->client->request('GET', 'profile/'.$id,[
            'headers' => $this->headers
        ]);
        $profile = json_decode($profile1->getBody()->getContents(),true);
        return view('admin.profile.edit')->with('profile', $profile);
    }

	public function update(Request $request)
    {
    	$profile = $this->client->request('PUT', 'profile/'.$request->id,[
    		'headers' => $this->headers,
            'form_params' => [
               'nama' => $request->input('nama'),
               'email' => $request->input('email'),
               'telp' => $request->input('telp'),
               'alamat' => $request->input('alamat'),
            ],
        ]);
		return redirect('admin/profile/index');
    }

    public function delete($id)
    {
    	$profile = $this->client->request('DELETE', 'profile/'.$id,[
    		'headers' => $this->headers
    	]);
    	return redirect('admin/profile/index');
    }
}
