@extends('layouts.user_master')
@section('title') USER @endsection
@section('content')
<div class="container content">
          <h1>9GAG - GO FUN YOURSELF</h1>
          <h2>Hey there!</h2><br>
          Connect with us at social network
          <a href="/" class="btn btn-primary">Facebook</a>
          Add us in Your circle
          <a href="/" class="btn btn-success">Google</a><br>
          9GAG is your best source of fun.
          Share anything you find interesting, get real responses from people all over the world, and discover what makes you laugh.
          <h1>User</h1>
          <h3>My Funny Collection</h3>
</div>

@include('includes.tab_user')
@yield('data')

@endsection
