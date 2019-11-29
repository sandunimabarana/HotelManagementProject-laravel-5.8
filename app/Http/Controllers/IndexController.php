<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function home(){

        return view('index');
       
    }

    public function tour(){

        return view('tour');
       
    }


    public function about_us(){

        return view('index');

       
    }

    public function contact_us(){

        return view('index');

       
    }



}
