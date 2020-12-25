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
    <form class="form-horizontal" action ="/posts" method="POST">
        {{ csrf_field() }}
        <div class="form-group">
                <label class="control-label col-sm-2" for="title">Title:</label>
                <div class="col-sm-10">
                        <input type="text" class="form-control" id="title" name = 'title'>
                </div>
              </div>
              <div class="form-group">
                <label class="control-label col-sm-2" for="content">Content:</label>
                <div class="col-sm-10"> 
                        <input type="text" class="form-control" id="content" name='content'>
                </div>
              </div>
              <div class="form-group"> 
                <div class="col-sm-offset-2 col-sm-10">
                  <button type="submit" class="btn btn-default">Submit</button>
                </div>
              </div>
    </form>
@endsection