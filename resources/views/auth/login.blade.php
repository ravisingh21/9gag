@extends('layouts.auth')
@section('title') LOGIN @endsection
@section('content')

@yield('mail')
<div class="login">
<h1>Login</h1>

  <form method="post">
    {{ csrf_field() }}
    <input type="email" name="email" placeholder="Email"  /><br><br>
      <input type="password" name="password" placeholder="Password" /><br><br>
      <input type="submit" class="btn btn-primary btn-block btn-large" value="Log in">
  </form>
</div>

@endsection
