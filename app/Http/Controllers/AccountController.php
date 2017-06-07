<?php

namespace App\Http\Controllers;


use GuzzleHttp\Client;
use Illuminate\Http\Request;

class AccountController extends Controller
{
    public function index(){
        $client = new Client([
            // Base URI is used with relative requests
            'base_uri' => 'http://115.28.76.103',
            // You can set any number of default request options.
            'timeout'  => 2.0
        ]);
        $body = $client->request('GET', 'assets')->getBody();
        $datas = json_decode($body, true);

        return view('/list', compact('datas'));
    }

    public function edit($id = NULL){
        if (isset($id)){
            $client = new Client([
                // Base URI is used with relative requests
                'base_uri' => 'http://115.28.76.103/assets/',
                // You can set any number of default request options.
                'timeout'  => 2.0
            ]);
            $body = $client->request('GET', $id)->getBody();
            $data = json_decode($body, true);

            return view('/edit', compact('data'));
        } else {
            return view('/add');
        }
    }

    public function update(Request $request)
    {
        $data =  $request->except('_token');
        print_r($data);

    }

    public function add(Request $request)
    {
        $client = new Client([
            // Base URI is used with relative requests
            'base_uri' => 'http://115.28.76.103',
            // You can set any number of default request options.
            'timeout'  => 2.0
        ]);


        $data =  json_encode($request->except('_token'));

        $assoc_array = json_decode($data);
        $urlEncodedString = http_build_query($assoc_array);
        $postURL = 'http://115.28.76.103/assets?'.$urlEncodedString;
        $response = $client->post($postURL);
        print_r(json_decode((string) $response->getBody()));
    }
}
