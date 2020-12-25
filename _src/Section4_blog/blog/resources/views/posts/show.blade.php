@extends('layouts.app')
@section('content')
    <a href='/posts' class='btn btn-default'>Go Back</a>
    <h1>Posts</h1>
      <div class='well'>
          <h3>{{$post->title}}</h3>
          <h5>{{$post->body}}</h5>
          <small>Dated : {{$post->created_at}}</small>
      </div>  
@endsection