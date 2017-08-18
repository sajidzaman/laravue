<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    //
    public function index() {
        $title = "This is home page";
        return view('welcome')->with(['title' => $title]);
    }
}
