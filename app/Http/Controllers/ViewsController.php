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
        return view('news');
    }

    public function event(){
        return view('event');
    }

    public function tourism(){
        $dashboard = new DashboardController();
        $data['list'] = $dashboard->getTourism();
        $data['type'] = "TOURISM";
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
