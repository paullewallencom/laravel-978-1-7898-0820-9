@extends('layouts.app')
@section('content')
    <h1>Posts Created!!</h1>  
        <h3>Title : {{$post->title}}</h3>
        <h3>Content : {{$post->content}}</h3>
        <h4><a href='/posts/{{$post->id}}/edit'>Edit</a> </h4>
        <form action="/posts/{{$post->id}}" method="POST">
            {{ csrf_field() }}
            <input type="hidden"  name='_method'
                        value="DELETE">
            <input type="submit"  style='color:black;'
                        value="DELETE">
        </form>
@endsection