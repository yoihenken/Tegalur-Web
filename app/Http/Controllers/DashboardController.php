<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use GuzzleHttp\Client;
use GuzzleHttp\Exception\RequestException;

class DashboardController extends Controller
{

    public function callAPI(){
        $client = new Client();
        $request = $client->get('https://tegal-city.kaedenoki.net/berita/1');
        $response = $request->getBody()->getContents();
        $data = json_decode($response,true);
        return $data;
    }
}
