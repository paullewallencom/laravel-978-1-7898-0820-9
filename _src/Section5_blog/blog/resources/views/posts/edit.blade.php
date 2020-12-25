@extends('layouts.app')
@section('content')
@if (count($errors->all()) > 0)
    <div class="alert alert-danger">
        <ul>
        @foreach ($errors->all() as $error)
            <li>{{$error}}</li>
        @endforeach
        </ul>
    </div>
    @endif
  <form action ="/posts/{{$post->id}}" method="POST">
        {{ csrf_field() }}
        <div class="form-group">
                <label class="control-label col-sm-2" for="title">Title:</label>
                <div class="col-sm-10">
                        <input type="text" class="form-control" id="title" name = 'title'
                        value="{{$post->title}}">
                </div>
              </div>
              <div class="form-group">
                <label class="control-label col-sm-2" for="content">Content:</label>
                <div class="col-sm-10"> 
                        <input type="text" class="form-control" id="content" name='content'
                        value="{{$post->content}}">
                </div>
              </div>
              <div class="form-group"> 
                <div class="col-sm-offset-2 col-sm-10">
                  <button type="submit" class="btn btn-default">Submit</button>
                </div>
              </div>
              <input type="hidden" class="form-control"  name='_method'
                        value="PUT">
    </form>
@endsection