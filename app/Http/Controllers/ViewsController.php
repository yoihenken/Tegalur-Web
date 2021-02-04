<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ViewsController;

class ViewsController extends Controller
{
    public function dashboard(){
        return view('dashboard');
    }

    public function news(){
        $dashboard = new DashboardController();
        $data['list'] = $dashboard->getNewsPage(1);
        $data['type'] = "NEWS";
        $data['current'] = 1;
        $data['last'] = $dashboard->getNewsLastPage();
        return view('listpageview', $data);
    }

    public function newsPage($index){
        $dashboard = new DashboardController();
        $data['list'] = $dashboard->getNewsPage($index);
        $data['type'] = "NEWS";
        $data['current'] = $index;
        $data['last'] = $dashboard->getNewsLastPage();
        return view('listpageview', $data);
    }

    public function event(){
        $dashboard = new DashboardController();
        $data['list'] = $dashboard->getEventPage(1);
        $data['type'] = "EVENT";
        $data['current'] = 1;
        $data['last'] = $dashboard->getEventLastPage();
        return view('listpageview', $data);
    }

    public function eventPage($index){
        $dashboard = new DashboardController();
        $data['list'] = $dashboard->getEventPage($index);
        $data['type'] = "EVENT";
        $data['current'] = $index;
        $data['last'] = $dashboard->getEventLastPage();
        return view('listpageview', $data);
    }

    public function tourism(){
        $dashboard = new DashboardController();
        $data['list'] = $dashboard->getTourism();
        $data['type'] = "TOURISM";
        // 
        // $data['lastev'] = $dashboard->getEventLastPage();
        return view('listview', $data);
    }

    public function tourismDetail($index){
        $detail = new DetailController();
        $data['list'] = $detail->getTourism($index);
        $data['type'] = "TOURISM";
        return view('detailview', $data);
    }


    public function culinary(){
        $dashboard = new DashboardController();
        $data['list'] = $dashboard->getCulinary();
        $data['type'] = "CULINARY";
        return view('listview', $data);
    }

    public function culinaryDetail($index){
        $detail = new DetailController();
        $data['list'] = $detail->getCulinary($index);
        $data['type'] = "CULINARY";
        return view('detailview', $data);
    }

    public function souvenir(){
        $dashboard = new DashboardController();
        $data['list'] = $dashboard->getSouvenir();
        $data['type'] = "SOUVENIR";
        return view('listview', $data);
    }

    public function souvenirDetail($index){
        $detail = new DetailController();
        $data['list'] = $detail->getSouvenir($index);
        $data['type'] = "SOUVENIR";
        return view('detailview', $data);
    }

    public function lodging(){
        $dashboard = new DashboardController();
        $data['list'] = $dashboard->getLodging();
        $data['type'] = "LODGING";
        return view('listview', $data);
    }

    public function lodgingDetail($index){
        $detail = new DetailController();
        $data['list'] = $detail->getLodging($index);
        $data['type'] = "LODGING";
        return view('detailview', $data);
    }
}
