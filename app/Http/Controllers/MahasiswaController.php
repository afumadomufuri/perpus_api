<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MahasiswaController extends Controller
{
    public function index() {
        $client = new \GuzzleHttp\Client(['base_uri'=>'http://192.168.43.203:8000']);

        $headers = ['headers'=>[
            'Authorization' => 'Bearer n7QtWgSDf2E5JbFH1uBRNuCQ1D1fnSQX2EbJFH3yGZQ8k0ErONF7ciQLqxKIw84DLUWEUadz4DcGhD6Jgdp8WY4s',
            'Accept' => 'application/json'
        ]
        
        ];

        $send = $client->request('GET', '/api/Akademik', $headers);

        $response = $send->getBody();

        return $response;
    }
}
