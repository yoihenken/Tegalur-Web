<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use GuzzleHttp\Client;
use GuzzleHttp\Exception\RequestException;

class DashboardController extends Controller
{
    public function getNewsPage ($index){
        
        $list = $this -> callApiList("NEWS", $index);
        if(sizeof($list)!= null){
            return $list;
        }
        return [];
    }

    public function getNewsLastPage(){
        $index = 50;
        $isLooping = true;
        do {
            $list = $this -> callApiList("NEWS", $index);
            if(sizeof($list) != null){
                $isLooping = false;
            }else{
                $index++;
            }
        } while ($isLooping);
        return $index;
    }

    public function getEventPage ($index){
        
        $list = $this -> callApiList("EVENT", $index);
        if(sizeof($list)!= null){
            return $list;
        }
        return [];
    }

    public function getEventLastPage(){
        $index = 7;
        $isLooping = true;
        do {
            $list = $this -> callApiList("EVENT", $index);
            if(sizeof($list) == null){
                $isLooping = false;
                $index--;
            }else{
                $index++;
            }
        } while ($isLooping);
        return $index;
    }

    public function getTourism (){
        
        $list = $this -> callApiList("TOURISM", false);
        if(sizeof($list)!= 0){
            return $list;
        }
        return [];
    }

    public function getCulinary (){
        
        $list = $this -> callApiList("CULINARY", false);
        if(sizeof($list)!= 0){
            return $list;
        }
        return [];
    }

    public function getSouvenir (){
        
        $list = $this -> callApiList("SOUVENIR", false); 
        if(sizeof($list)!= 0){
            return $list;
        }
        return [];
    }
    public function getLodging (){
        
        $list = $this -> callApiList("LODGING", false);
        if(sizeof($list)!= 0){
            return $list;
        }
        return [];
    }

    // request api LIST
    function callApiList($mode, $index){
        $baseURL = "https://tegal-city.kaedenoki.net";
        $client = new Client();

        switch($mode){
            case "NEWS" : 
                $request = $client->get($baseURL . "/berita/".$index);
                $response = $request->getBody()->getContents();
                $data = json_decode($response,true);
                $list = $data["list"];
                break;
            case "EVENT" : 
                $request = $client->get($baseURL . "/event/".$index);
                $response = $request->getBody()->getContents();
                $data = json_decode($response,true);
                foreach($data as $key => $item){
                    switch ($key) {
                        case 'msg': 
                            $data = ['list' => []];
                            break;
                    }
                }
                $list = $data["list"];
                break;
            case "TOURISM" : 
                $request = $client->get($baseURL . "/pariwisata/");
                $response = $request->getBody()->getContents();
                $data = json_decode($response,true);
                $list = $data["data"];
                break;
            case "CULINARY" : 
                $request = $client->get($baseURL . "/kuliner/");
                $response = $request->getBody()->getContents();
                $data = json_decode($response,true);
                $list = $data["data"];
                break;
            case "SOUVENIR" : 
                $request = $client->get($baseURL . "/oleh/");
                $response = $request->getBody()->getContents();
                $data = json_decode($response,true);
                $list = $data["data"];
                break;
            case "LODGING" : 
                $request = $client->get($baseURL . "/penginapan/");
                $response = $request->getBody()->getContents();
                $data = json_decode($response,true);
                $list = $data["data"];
                break;
            default :
                break;
        }
        return $list;
    }
}