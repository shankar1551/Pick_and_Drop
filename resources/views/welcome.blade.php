<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200;600&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="{{ URL::asset('css/shop.css') }}" />
        <link rel="stylesheet" href="{{ URL::asset('css/bootstrap.css') }}" />
        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 13px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
        </style>
    </head>
    <body>

      {{-- nanvbar from the Anjali file --}}






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
                            <a href="" class="nav-link slide p-3">Home</a>
                        </li>
                      <li class="nav-item">
                        <a href="" class="nav-link slide p-3">About Us</a>
                      </li>


                      <li class="nav-item">
                        <a href="" class="nav-link slide p-3">Services</a>

                      </li>

                      <li class="nav-item">
                        <a href="#contact_me" class="nav-link slide p-3">Contact Us</a>
                      </li>
                      @if (Route::has('login'))

                              @auth
                                <li class="nav-item">
                                  <a href="{{ url('/home') }}" class="nav-link slide p-3">Shankar POkhrel
                                </li>
                              @else
                                <li class="nav-item">
                                  <a href="{{ route('login') }}" class="nav-link slide p-3">User Login</a>
                                </li>
                                <li class="nav-item">
                                  <a href="{{ route('login') }}" class="nav-link slide p-3">Employee Login</a>
                                </li>
                                  @if (Route::has('register'))
                                    <li class="nav-item">
                                      <a href="{{ route('register') }}" class="nav-link slide p-3">Register</a>
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


          {{--  ------------------------Home page main view----------- --}}

      <div class="container-fluid" id="a1">
        <div class="row py-3">
          <div class="col-md-5 mt-5">
            <h1 class="mb-5" id="hell">Send Your Parcel From Your Doorstep</h1>
            <p id="par1">

              Lorem ipsum dolor, sit amet consectetur adipisicing elit. Veritatis
              nobis numquam sed expedita rerum? Facilis iusto amet rem, eius minus
              possimus accusamus earum id nesciunt?
            </p>
          </div>

          <div class="col-md-7" id="del1">
            {{-- <img src="images/Delivery.png" alt="" id="del" /> --}}
            <img src="{{ URL::asset('images/Delivery.png') }}" alt="" id="del" />

          </div>
        </div>
        <div class="row py-3" id="but">
          <div class="col-md-6">
            <button id="order">Request Pickup</button>
            <button id="track">Track Your Parcel</button>
          </div>
        </div>
      </div>

      <div class="container-fluid" id="a2">
        <div class="row-py-3">
          <div class="card-deck">
            <div class="col-md-4 col-sm-6">
              <div class="card" id="card1">
                <h3 id="why">Why Choose Us?</h3>
                <div class="card-body">
                  <p class="card-title" id="lorem1">
                    Lorem ipsum, dolor sit amet consectetur adipisicing elit. Autem, inventore? Lorem ipsum dolor sit amet consectetur adipisicing elit. Lorem
                    ipsum dolor sit amet consectetur adipisicing elit. Qui,
                    officiis.
                  </p>
                  <i class="fas fa-arrow-circle-right"></i>
                </div>
              </div>
            </div>

            <!-- <div class="col-md-3 col-sm-6">
              <div class="card" id="card2">
                <img src="images/food1.jpg" alt="" />
                <div class="card-body">
                  <p class="card-title" id="lorem2">Choose Your Favourite Food</p>
                </div>
              </div>
            </div> -->

            <div class="col-md-3 col-sm-6">
              <div class="card" id="card3">
                <img src="images/deliveryman.jpeg" alt="" />
                <div class="card-body">
                  <p class="card-title" id="lorem3">
                    Get Delivery At Your Doorstep
                  </p>
                </div>
              </div>
            </div>
            <div class="col-md-3 col-sm-6">
              <div class="card" id="card4">
                <img src="images/warehouse.jpg" alt="" />
                <div class="card-body">
                  <p class="card-title" id="lorem4">
                    Best In Class Warehouse Facility
                  </p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

{{-- -------------------home page main view end---------- --}}



    </body>
</html>
