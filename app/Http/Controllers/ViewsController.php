<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\DashboardController;

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
        return view('tourism', $data);
    }

    public function culinary(){
        return view('culinary');
    }

    public function souvenir(){
        return view('souvenir');
    }

    public function lodging(){
        return view('logding');
    }
}
