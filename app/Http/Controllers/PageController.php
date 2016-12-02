<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use App\Http\Requests;

class PageController extends Controller
{
    //Frontend
    public function index(){
      return view('frontend.index');
    }
    public function hot(){
      return view('frontend.contents.hot');
    }
    public function trending(){
      return view('frontend.contents.trending');
    }
    public function fresh(){
      return view('frontend.contents.fresh');
    }
    public function tv(){
      return view('tv.index');
    }
    public function timely(){
      return view('frontend.contents.timely');
    }
    public function girl(){
      return view('frontend.contents.girl');
    }

    public function nsfw(){
      return view('frontend.contents.nsfw');
    }
    public function gif(){
      return view('frontend.contents.gif');
    }
    public function wtf(){
      return view('frontend.contents.wtf');
    }
    public function gaming(){
      return view('frontend.contents.gaming');
    }

    public function apps(){
      return view('frontend.contents.apps');
    }
    public function school(){
      return view('frontend.contents.school');
    }
    public function funny(){
      return view('frontend.contents.funny');
    }
    public function upload(){
      return view('user.upload');
    }
    public function postupload(){
    return redirect('/login');
    }

}
