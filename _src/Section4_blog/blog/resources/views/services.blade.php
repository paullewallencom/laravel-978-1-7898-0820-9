@extends('layouts.app')
@section('content')
<h1>{{$title}}</h1>
@if(count($services) > 0)
@foreach ($services as $serv)
    <li class='list-group-item'>{{$serv}}</li>
@endforeach
<ul>
    @endif
@endsection