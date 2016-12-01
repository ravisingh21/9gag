@extends('auth.index')
@section('title') Sign Up @endsection
@section('data')

<div class="login">
<h1>Sign up</h1>

  <form method="post">
    {{ csrf_field() }}
    <input type="text" name="name" placeholder="Full Name" required="required" /><br><br>
    <input type="email" name="email" placeholder="Email" required="required" /><br><br>
    <input type="password" name="password" placeholder="Password" required="required" /><br><br>
    <input type="submit" class="btn btn-primary btn-block btn-large" value="Signup n Have Fun">
  </form>
</div>

@endsection
