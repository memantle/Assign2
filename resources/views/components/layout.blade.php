<!DOCTYPE html>
<html>
  <head>
    <title>{{$title}}</title>
    <meta http-equiv="content-type" content="text/html;charset=utf-8" />
    <!-- <link href="{{asset('css/style.css')}}" type="text/css" rel="stylesheet"> -->
    <!-- <link href="{{asset('build/assets/app-Bn5upfEP.css')}}" type="text/css" rel="stylesheet"> -->
    @viteReactRefresh
    @vite(['resources/css/app.css','resources/js/app.jsx'])
  </head>
  <body class="bg-red-400">
    @auth
    <div>
        Logged in as {{Auth::user()->name}}
        <form method='POST' action='/logout'>
            @csrf
            <button type='submit'>Logout</button>
        </form>
    </div>
@endauth
    <nav>
      <ul>
        <li><a href="/films">Home</a></li>
        @can('edit')
          <li><a href="/films/create">Add new film</a></li>
        @endcan
        <li><a href="/films/about">About</a></li>
        <li><a href="/films/edit">Edit</a></li>
        @guest
        <li><a href="/login">Sign in</a></li>
        @endguest
      </ul>
    </nav>
    <h1 class="text-3xl font-bold text-orange-600">Amazing Film App</h1>
      <div id="react-content">
      
  </div>
    {{$slot}}
  </body>
</html>