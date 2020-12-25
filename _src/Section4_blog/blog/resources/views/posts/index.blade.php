@extends('layouts.app')
@section('content')
    <h1>Posts</h1>
    @if(count($posts)>0)
    @foreach ($posts as $post)
      <div class='well'>
          <h3><a href='posts/{{$post->id}}'>{{$post->title}}</a></h3>
          <small>Dated : {{$post->created_at}}</small>
      </div>  
    @endforeach
    {{$posts->links()}}
    @else
        <h1> No POSTS Found</h1>
    @endif
@endsection