<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Illuminate\Support\Facades\Redis;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth')->except(['welcome', 'users','index']);
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $visits = Redis::incr('visits');
        return $visits;
        return view('home');
    }

    public function welcome(){
        $title ='Vue App in Laravel';
        return view('welcome')->with(compact('title'));
    }

    public function intro() {
        $intro= [
            'title' => 'I am Sajid Badi-uz-zaman. An Experienced Web Developer and trainer with Expertise in PHP and Javascript applications.',
            'description' => 'This is the description of What i am going to write about myself in coming days'
        ];

        return $intro;
    }
    public function users() {
        return User::all();
    }
}
