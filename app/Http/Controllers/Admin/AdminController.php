<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index(){
        return view('admin.index');
       
    }
    public function contact(){
        return view('admin.contact');
    }


    public function home(){
        return view('admin.home');
    }
    public function community(){
        return view('admin.community');
    }
    public function events(){
        return view('admin.events');
    }
    public function faq(){
        return view('admin.faq');
    }
    public function news(){
        return view('admin.news');
    }
    public function praduct(){
        return view('admin.praduct');
    }
    public function servis(){
        return view('admin.servis');
    }
    public function about(){
        return view('admin.about');
    }
}
