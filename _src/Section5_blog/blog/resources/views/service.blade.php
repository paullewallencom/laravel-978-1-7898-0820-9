@extends('layouts.app')
@section('content')
    <h1>Services Provided!!!</h1>
    <h2>See below the list of service</h2>
    @foreach ($services as $service)
    <p>{{$service}}</p>    
    @endforeach
    
@endsection