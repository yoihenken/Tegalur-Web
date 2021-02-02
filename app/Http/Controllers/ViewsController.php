<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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
        return view('tourism');
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
