<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class PageController extends Controller
{
    //Frontend
    public function index(){
      return view('frontend.index');
    }
}
