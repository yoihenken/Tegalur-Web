<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use GuzzleHttp\Client;
use GuzzleHttp\Exception\RequestException;

class DetailController extends Controller
{

    public function getNews($page, $index){
        $list = $this->callApiDetail("NEWS", $page, $index);
        if(sizeof($list)!= 0){
            return $list;
        }
        return [];
    }

    public function getEvent($page, $index){
        $list = $this->callApiDetail("EVENT", $page, $index);
        if(sizeof($list)!= 0){
            return $list;
        }
        return [];
    }

    public function getTourism ($index){
        
        $list = $this -> callApiDetail("TOURISM", false, $index);
        if(sizeof($list)!= 0){
            return $list;
        }
        return [];
    }

    public function getCulinary ($index){
        
        $list = $this -> callApiDetail("CULINARY", false, $index);
        if(sizeof($list)!= 0){
            return $list;
        }
        return [];
    }

    public function getSouvenir ($index){
        
        $list = $this -> callApiDetail("SOUVENIR", false, $index);
        if(sizeof($list)!= 0){
            return $list;
        }
        return [];
    }
    public function getLodging ($index){
        
        $list = $this -> callApiDetail("LODGING", false, $index);
        if(sizeof($list)!= 0){
            return $list;
        }
        return [];
    }

    function callApiDetail($mode, $page, $index){
        $baseURL = $baseURL = "https://tegal-city.kaedenoki.net";
        $client = new Client();

        switch($mode){
            case "NEWS" : 
                $request = $client->get($baseURL."/berita/detail/".$page."/".$index);
                $response = $request->getBody()->getContents();
                $data = json_decode($response,true);
                $list = $data["object"];
                
                break;
            case "EVENT" : 
                $request = $client->get($baseURL . "/event/detail/".$page."/".$index);
                $response = $request->getBody()->getContents();
                $data = json_decode($response,true);
                $list = $data["object"];
                break;
            case "TOURISM" : 
                $request = $client->get($baseURL . "/pariwisata/".$index);
                $response = $request->getBody()->getContents();
                $data = json_decode($response,true);
                $list = $data["data"];
                break;
            case "CULINARY" : 
                $request = $client->get($baseURL . "/kuliner/".$index);
                $response = $request->getBody()->getContents();
                $data = json_decode($response,true);
                $list = $data["data"];
                break;
            case "SOUVENIR" : 
                $request = $client->get($baseURL . "/oleh/".$index);
                $response = $request->getBody()->getContents();
                $data = json_decode($response,true);
                $list = $data["data"];
                break;
            case "LODGING" : 
                $request = $client->get($baseURL . "/penginapan/".$index);
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