@extends('layouts.user_master')
@section('title') UPLOAD @endsection
@section('content')
<br><br><br>
<div class="container content">
<h1>Upload your file</h1>
<h3>Post Title</h3>
<form id="" method="post">
  {{ csrf_field() }}
  <div class="login">
  @for($i=1;$i<=3;$i++)
  <h4>Post Heading {{$i}}</h4><textarea rows="1" cols=30">
    "I will be leaving my great business in total in order to fully focus on running the country in order to make America great again," he tweeted in a series of missives sent before dawn. "While I am not mandated to do this under the law, I feel it is visually important, as president, to in no way have a conflict of interest with my various businesses."
    He said legal documents are "being crafted which take me completely out of business operations," he added, saying the presidency is "a far more important task!"
  </textarea><br><br>
    @endfor
  <a href="#" class="glyphicon glyphicon-folder-open btn btn-default " type="submit"> Attach File</a>
  <input type="submit" class="btn btn-gag " value="Upload">
</div>
</form>
</div>
@endsection
