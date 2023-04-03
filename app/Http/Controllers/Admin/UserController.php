<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class UserController extends Controller
{
    
    
    public function index(){
        return view('user.index');
       
    }
    public function contact(){
        return view('user.contact');
    }


    public function home(){
        return view('user.home');
    }
    public function community(){
        return view('user.community');
    }
    public function events(){
        return view('user.events');
    }
    public function faq(){
        return view('user.faq');
    }
    public function news(){
        return view('user.news');
    }
    public function praduct(){
        return view('user.praduct');
    }
    public function servis(){
        return view('user.servis');
    }
    public function about(){
        return view('user.about');
    }


}
