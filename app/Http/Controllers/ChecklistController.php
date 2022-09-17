<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use GuzzleHttp\Client;
use Illuminate\Support\Facades\Auth;

class ChecklistController extends Controller
{
    //
    public function loginCheck(Request $request){
        $client = new Client();
        // $token = "eyJhbGciOiJIUzUxMiJ9.eyJyb2xlcyI6W119.i2OVQdxr08dmIqwP7cWOJk5Ye4fySFUqofl-w6FKbm4EwXTStfm0u-sGhDvDVUqNG8Cc7STtUJlawVAP057Jlg";
        $response = $client->request('POST', 'http://94.74.86.174:8080/api/login', [
            'headers' => [
                'Accept' => 'application/json'
            ],
            'json' => [
                'username' => $request->username,
                // 'token' => 'eyJhbGciOiJIUzUxMiJ9.eyJyb2xlcyI6W119.i2OVQdxr08dmIqwP7cWOJk5Ye4fySFUqofl-w6FKbm4EwXTStfm0u-sGhDvDVUqNG8Cc7STtUJlawVAP057Jlg',
                'password' => $request->password
            ]
        ]);
        $statusCode = $response->getStatusCode();
        $body = $response->getBody()->getContents();

        $data = json_decode($body, true);
        // $request->session()->put('token', $data->token);
        // dd($data);
        return redirect()->route('checklist');
        // dd($data);

        // return view('checklist', ['data' => $data]);

    }
    // public function authenticate(Request $request){
    //     $credentials = $request->validate([
    //         'email' => ['required', 'email'],
    //         'password' => ['required'],
    //     ]);

    //     dd
    // }
    public function login(){

        return view('login');

        
    }
    public function welcome(){

        return view('welcome');

    }
    public function index()
    {
        $client = new Client();
        $response = $client->request('GET', 'http://94.74.86.174:8080/api/checklist');
        $statusCode = $response->getStatusCode();
        $body = $response->getBody()->getContents();

        $data = json_decode($body, true);

        return view('welcome', ['data' => $data]);

    }
    public function getData()
    {
        $client = new Client([
            'headers' => [
              'Authorization' =>  'Bearer ' . 'eyJhbGciOiJIUzUxMiJ9.eyJyb2xlcyI6W119.i2OVQdxr08dmIqwP7cWOJk5Ye4fySFUqofl-w6FKbm4EwXTStfm0u-sGhDvDVUqNG8Cc7STtUJlawVAP057Jlg',
              'Content-Type'  =>  'application/json'
          ],
            'http_errors' => false
        ]);
        $response = $client->request('GET', 'http://94.74.86.174:8080/api/checklist');
        $statusCode = $response->getStatusCode();
        $body = $response->getBody()->getContents();

        $data = json_decode($body, true);
        dd($data);

        return view('checklist', ['data' => $data]);
    }

    
    

    public function getItemchecklist($id)
    {
        $client = new Client();
        $response = $client->request('GET', 'http://94.74.86.174:8080/api/checklist/' . $id, [
            'headers' => [
                'Accept' => 'application/json'
            ]
        ]);
        $statusCode = $response->getStatusCode();
        $body = $response->getBody()->getContents();

        $data = json_decode($body, true);
        // dd($data);

        return view('detail', ['data' => $data]);
    }

    public function addChecklist(Request $request)
    {
        $client = new Client();
        $response = $client->request('POST', 'http://94.74.86.174:8080/api/checklist', [
            'headers' => [
                'Accept' => 'application/json'
            ],
            'json' => [
                'name' => $request->name,
            ],
        ]);
        $statusCode = $response->getStatusCode();
        $body = $response->getBody()->getContents();

        $data = json_decode($body, true);


        return redirect()->route('checklist')->with('success', 'Data Berhasil Ditambahkan');
    }

    // public function getEditChecklist($id)
    // {
    //     $client = new Client();
    //     $response = $client->request('GET', 'http://94.74.86.174:8080/api/checklist' . $id, [
    //         'headers' => [
    //             'Accept' => 'application/json'
    //         ]
    //     ]);
    //     $statusCode = $response->getStatusCode();
    //     $body = $response->getBody()->getContents();

    //     $data = json_decode($body, true);
    //     // dd($data);

    //     return view('edit', ['data' => $data]);
    // }

    // public function editChecklist(Request $request, $id)
    // {
    //     $client = new Client();
    //     $response = $client->request('PUT', 'http://94.74.86.174:8080/api/checklist/' . $id,  [
    //         'headers' => [
    //             'Accept' => 'application/json'
    //         ],
    //         'json' => [
    //             'name' => $request->name
    //         ],
    //     ]);
    //     $statusCode = $response->getStatusCode();
    //     $body = $response->getBody()->getContents();

    //     $data = json_decode($body, true);


    //     return redirect()->route('checklist')->with('success', 'Data Berhasil Di Update');
    // }

    public function deleteChecklist($id)
    {
        $client = new Client();
        $response = $client->request('DELETE', 'http://94.74.86.174:8080/api/checklist/' . $id, [
            'headers' => [
                'Accept' => 'application/json'
            ]
        ]);
        $statusCode = $response->getStatusCode();
        $body = $response->getBody()->getContents();

        $data = json_decode($body, true);
        // dd($data);

        return redirect()->route('checklist')->with('success', 'Data Berhasil Di Hapus');

    }
}
