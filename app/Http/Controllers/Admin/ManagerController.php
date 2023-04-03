<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;


class ManagerController extends Controller
{
    
    public function index(){
        return view('manager.index');
       
    }
    public function contact(){
        return view('manager.contact');
    }


    public function home(){
        return view('manager.home');
    }
    public function community(){
        return view('manager.community');
    }
    public function events(){
        return view('manager.events');
    }
    public function faq(){
        return view('manager.faq');
    }
    public function news(){
        return view('manager.news');
    }
    public function praduct(){
        return view('manager.praduct');
    }
    public function servis(){
        return view('manager.servis');
    }
    public function about(){
        return view('manager.about');
    }

}
?>
