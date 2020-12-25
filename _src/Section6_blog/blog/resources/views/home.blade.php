@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>

                <div class="panel-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif
                   <a href='/posts/create'>Add a Post</a>
                   <table class='table table-striped'><tr><th>Title</th><th></th><th></th></tr>
                    @foreach ($posts as $post)
                        <tr><th>{{$post->title}}</th>
                        <th><a href='/posts/{{$post->id}}/edit'>Edit</a></th>
                        <th><a href='/posts/{{$post->id}}/edit'>Delete</a></th></tr>
                    @endforeach </table>
                
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
