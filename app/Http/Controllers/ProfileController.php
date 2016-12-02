<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class ProfileController extends Controller
{
    //
    public function user(){
      return view('user.index');
    }
    public function profile(){
      return view('user.profile');
    }

    public function overview(){
      return view('user.profile.overview');
    }
    public function posts(){
      return view('user.profile.posts');
    }
    public function upvotes(){
      return view('user.profile.upvotes');
    }
    public function comments(){
      return view('user.profile.comments');
    }
    public function notifications(){
      return view('user.profile.notifications');
    }

}
