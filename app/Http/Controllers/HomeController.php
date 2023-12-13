<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function home(){
    	return view('home.home');
    }
    public function about(){
    	return view('home.about');
    }
    public function contact(){
    	return view('home.contact');
    }
    public function ihza(){
        return 'Ihza';
    }
    public function yuyun(){
        return 'yuyun';
    }
    public function produk(){
        return view('home.index');
        }
}

?>