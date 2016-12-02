<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use App\Http\Requests;

class AuthController extends Controller
{
    //
    public function signup(){
      return view('auth.check');
    }

    public function email(){
      return view('auth.signup');
    }
    public function login(){
      return view('auth.login');
    }
    public function postlogin(){
      return redirect('/user');
    }
    public function postsignup(){
      return redirect('/user');
    }

}
