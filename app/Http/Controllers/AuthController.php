<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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
      return view('user.index');
    }
    

}
