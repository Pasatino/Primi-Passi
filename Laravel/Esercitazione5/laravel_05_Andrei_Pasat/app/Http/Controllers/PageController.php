<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function welcome(){
        return view('welcome');
    }
    public function contatti(){
        return view('contatti');
    }
    public function thankYou(){
        return view('thankYou');
    }



}