<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    function index(Request $request){
        return view('index');

    }


    function hero(Request $request){
        return view('hero');
    }
    
    function about(Request $request){
        return view('about');
    }

    function resume(Request $request){
        return view('resume');
    }
    
    
    function portfolio(Request $request){
        return view('portfolio');
    }
    
    function testimonial(Request $request){
        return view('testimonial');
    }

    
    function contact(Request $request){
        return view('contact');
    }


}
