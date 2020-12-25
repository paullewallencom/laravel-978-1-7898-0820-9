@extends('layouts.app')
@section('content')
<div class="jumbotron text-center">

 <h1>{{$title}}</h1> 
 <p> {{$desc}}</p>
 <p> @if(count($data) > 0)
         <h3>{{$data['k1']}}</h3>
         @else
         <h3>Sorry</h3>
   @endif
</p>
 <p><a class="btn btn-primary btn-large" href='/login'>Login</a>  
    <a class="btn btn-success btn-large" href='/register'>Register</a>  
 </p>
 </div>
 <a href='edit/1'>Edit</a>
 <form action="error" method="post">
  {{csrf_field() }}
    Username : <input type="text" name='uname'/>
    Id : <input type="text" name='id'/>
    {{-- <input type="hidden" value="{{csrf_token()}}"/> --}}
      <input type="submit"/>
 </form>
@endsection