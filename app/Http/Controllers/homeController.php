<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class homeController extends Controller
{
    public function index(){
        return view("home");
    }
    public function home(){
        return view("page-home");
    }
    public function stuff(){
        return view("page-stuff");
    }
    public function order(){
        return view("page-order");
    }
    public function about(){
        return view("page-about");
    }
}
