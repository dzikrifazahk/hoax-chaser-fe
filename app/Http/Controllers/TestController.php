<?php

namespace App\Http\Controllers;
use GuzzleHttp\Client;

use Illuminate\Http\Request;

class TestController extends Controller
{
    function index() {
        $client = new Client();
        $url = 'https://sxzh8vmg-4005.asse.devtunnels.ms/news/getAll';

        $response = $client->request('GET', $url, [
            'headers' => [
                'Authorization' => 'Bearer eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ9.eyJ1c2VySWQiOiJkM2UwZDZmOS00MTIzLTQ5NzctOWFkMC1hMDk2N2QwMmY2NGEiLCJ1c2VyRW1haWwiOiJkemlrcmlAZ21haWwuY29tIiwiaWF0IjoxNzE5NzQ1NTI5fQ.FQP6GdudICqjc7vBgHurgiraMp9f8LLGJhjWsW0_wG0',
            ],
        ]);

        $data = json_decode($response->getBody(), true);
dd($data['data']);
        return view('pages.index', ['datas' => $data]);
    }
}
