<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use App\Http\Requests;

class PageController extends Controller
{
    //Frontend
    public function index($category = null)
    {
      return view('frontend.index');
    }

    public function upload()
    {
      return view('user.upload');
    }

    public function postupload()
    {
    return redirect('/login');
    }

}
