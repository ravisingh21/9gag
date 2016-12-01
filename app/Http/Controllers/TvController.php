<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class TvController extends Controller
{
    //
    public function nsfw(){
      return view('tv.contents.nsfw');
    }
    public function lol(){
      return view('tv.contents.lol');
    }
    public function wtf(){
      return view('tv.contents.wtf');
    }
    public function ad(){
      return view('tv.contents.ad');
    }

    public function wow(){
      return view('tv.contents.wow');
    }
    public function movie(){
      return view('tv.contents.movie');
    }
    public function gaming(){
      return view('tv.contents.gaming');
    }
    public function fail(){
      return view('tv.contents.fail');
    }
    public function aww(){
      return view('tv.contents.aww');
    }

}
