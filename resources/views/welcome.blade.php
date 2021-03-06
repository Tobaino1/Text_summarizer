<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title> Welcome | HelpMe - Portal</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet" type="text/css">

<!-- adding bootstrap theme and jquery from bootswatch -->
    <link rel="stylesheet" type="text/css" href="{{url('css/bootstrap.css')}}">
    <script type="text/javascript" src="{{url('js/jquery-3.1.0.js')}}"></script>
     <script type="text/javascript" src="{{url('js/bootstrap.js')}}"></script>

       
    </head>
    <body>

<!--    old route declaration
 -->
    <!-- <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ route('login') }}">Login</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}">Register</a>
                        @endif
                    @endauth
                </div>
            @endif -->



         <!--    <div class="content">
                <div class="title m-b-md">
                    TEXT SUMMARIZER FOR CHILDREN NEWS RENDERING
                </div>

                <div class="links">
                    <a href="{{ route('about') }}">About & User's guide </a>
                    <a href="{{ route('feedback_contact') }}"> Feedback / Contact us </a>
                    {{--<a href="https://blog.laravel.com">Blog</a>--}}
                   
                </div>
            </div>
        </div> -->

        <!-- flashing / displaying the session success message declared in the controller  -->
<div class="col-md-6 col-lg-6">
@if (session('success'))
<div class="alert alert-success">
{{session('success')}}
</div>
@endif
</div>

 <nav class="navbar navbar-expand-lg navbar-dark bg-success">
  <a class="navbar-brand" href="#">HelpMe - Portal</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarColor01" aria-controls="navbarColor01" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarColor01">
    <ul class="navbar-nav mr-auto">
      
    <li class="nav-link">     
                        <a class="nav-link" href="{{ url('/') }}" style="color: white">Welcome</a>
      </li>
      <li>

    <li class="nav-link">
         <a class="nav-link" href="{{ route('help') }}" style="color: white">Help on a project / research</a> 
      </li>

  <li class="nav-link">
         <a class="nav-link" href="{{ route('previous_proj') }}" style="color: white">Previous projects / researches</a> 
      </li>

      <li class="nav-link">
         <a class="nav-link" href="{{ route('login') }}" style="color: white">Admin</a>
      </li>
      
      <!-- <li class="nav-link">
         <a class="nav-link" href="{{ route('register') }}" style="color: white">Register</a> 
      </li> -->

    </ul>
    <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="text" placeholder="Search">
      <button class="btn btn-secondary my-2 my-sm-0" type="submit">Search</button>
    </form>
  </div>
</nav>
        </div>
    </nav>

    <main class="py-4">
        @yield('content')
    </main>
       <br><br><br><br><br>
       <div class="content">
                <div class="title m-b-md">
               <div align="center"> <img src="{{ 'storage/img.png'}}" height="80" width="180" /> 
                   <p align="center" style="color: green">Our recent Machine Learning project</p> 
                   
                   <a href="{{ route('home') }}">Goto Text Summarizer for children news rendering </a> 

                </div></div>

                 <div align="center">
                    <ul>
                  <hr/>
                  <a href="{{ route('about') }}">About </a> 
                  <hr/>
                 <a href="{{ route('feedback_contact') }}"> Feedback / Contact us </a> 
                    <hr /style="color: blue">
                    <a href="https://www.sparklegrid.tech"> Hire Software Engineer(s) / Research & Development Engineer(s)</a> 
                    <hr/>
                    <ul>                  
                </div>   

</div>
       <br><br><br>

    <!-- Footer -->
    @include ('inc.footer')
    </body>
</html>
