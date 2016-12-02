<?php

namespace App\Http\Controllers\Frontend;

use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class DefaultController extends Controller
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
