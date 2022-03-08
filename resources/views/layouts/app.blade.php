<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Parcel Management System</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
   
    {{-- <<script src="{{ asset('public/assets/js/.min.js') }}"></script> --}}

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/bootstrap.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="http://localhost/send/public/css/shop.css" />
    <script    src="https://use.fontawesome.com/releases/v5.15.3/js/all.js"     data-auto-replace-svg="nest"  >   </script>
    <script    src="https://code.jquery.com/jquery-3.5.1.slim.min.js"      integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"      crossorigin="anonymous"    ></script>
    <script    src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"      integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN"      crossorigin="anonymous"  ></script>
    <script    src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.min.js"      integrity="sha384-+YQ4JLhjyBLPDQt//I+STsc9iw4uQqACwlvpslubQzn4u2UU2UFM80nGisd026JF"      crossorigin="anonymous"    ></script>
    <script src="{{ asset('css/shop.js') }}"></script>
</head>
<body>
    <div id="app">
        
<div class="head sticky-top">
      <div class="header">
        <nav class="navbar navbar-dark navbar-expand-md">
          <div class="container-fluid" id="ere">
            <a href="#" class="navbar-brand" id="eren"><i class="fab fa-autoprefixer"></i></a>
            <button
              class="navbar-toggler"
              type="button"
              data-toggle="collapse"
              data-target="#navmenu"
            >
              <span class="navbar-toggler-icon"></span>
            </button>
               <div class="collapse navbar-collapse" id="navmenu">
              <ul class="navbar-nav ml-auto">
                  <li class="nav-item">
                      <a href=" {{route('home')}} " class="nav-link active  slide p-3">Home</a>
                  </li>
                <li class="nav-item">
                  <a href="{{ route('about') }}" class="nav-link active slide p-3">About Us</a>
                </li>


                @if (Route::has('login'))
                        @auth
                          
                           <li class="nav-item">
                               
                                    <a class="nav-link active slide p-3" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        Logout
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                
                           </li>
                           <li class="nav-item">
                            <a href="{{ url('/home') }}" class="nav-link active slide p-3">{{Auth::user()->name}}</a>
                          </li> 
                        @else
                          <li class="nav-item">
                            <a href="{{ route('login') }}" class="nav-link active slide p-3">User Login</a>
                          </li>
                          <li class="nav-item">
                            <a href="{{ route('login') }}" class="nav-link active slide p-3">Employee Login</a>
                          </li>
                            @if (Route::has('register'))
                              <li class="nav-item">
                                <a href="{{ route('register') }}" class="nav-link active slide p-3">Register</a>
                              </li>
                            @endif
                        @endauth

                @endif

              </ul>
            </div>
          </div>
        </nav>
      </div>
    </div>


        <main class="py-4">
            @yield('content')
        </main>
    </div>
</body>
 <script src="{{ asset('js/hide.js') }}"></script>
</html>
