<nav class="navbar navbar-inverse">
    <div class="container-fluid">
      <div class="navbar-header">
        <a class="navbar-brand" href="/">{{config('app.name', 'BLOGZ')}}</a>
      </div>
      <ul class="nav navbar-nav">
        <li><a href="/">Home</a></li> 
        <li><a href="{{route('knowus')}}">About</a></li> 
        <li><a href="/service">Services</a></li>    
        <li><a href="/posts">Blog</a></li> 
      </ul>
    </div>
  </nav>