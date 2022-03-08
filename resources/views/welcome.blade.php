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
        
       
    </head>
    <body>


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
                            <a href="" class="nav-link active slide p-3 ">Home</a>
                        </li>
                      <li class="nav-item">
                        <a href="" class="nav-link active slide p-3">About Us</a>
                      </li>


                      <li class="nav-item">
                        <a href="" class="nav-link active slide p-3">Services</a>

                      </li>

                      <li class="nav-item">
                        <a href="#contact_me" class="nav-link active slide p-3">Contact Us</a>
                      </li>
                      @if (Route::has('login'))

                              @auth
                                <li class="nav-item">
                                  <a href="{{ url('/home') }}" class="nav-link active slide p-3">Shankar POkhrel
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


          

      <div class="container-fluid" id="a1">
        <div class="row py-3">
          <div class="col-md-5 mt-5">
            <h1 class="mb-5" id="hell">Send Your Parcel From Your Doorstep</h1>
            <p id="par1" >

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
            <a href="#search" class="btn btn-secondary">Search Parcel</a>
            <a href="#" class="btn btn-secondary">Request Pickup</a>
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
                  <p class="text-dark lead " style="font-size: 22px;" id="lorem1">
                    We provide you the best service for sending courier in Butwal. Best in class And No Compromise in Service  
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

      
      <div class="row" id="search">
        <div class="col-lg-11 col-sm-11 m-auto">
              <div class="container-fluid">
        
            <div class="col-lg-12 col-md-10 mt-5 pt-5 pb-5 bg-light">
                      <p class="text-dark ">Quickly check the status of your parcel </p>
                        <h4><p class="text-primary">Check  Parcel Status By the UID:</p></h4>
                        <form class="form-inline mt-3" action="{{route('status')}}" method="POST">
                            {{csrf_field()}}
                            <input class="form-control mr-sm-2" type="search" placeholder="Search User" aria-label="Search" name="id">
                            <button class="btn btn-outline-primary my-2 my-sm-0" type="submit">Search</button>
                        </form>              
            </div>

      </div>
        </div>
      </div>
      

{{-- -------------------home page main view end---------- --}}

   {{--  <div class="col-lg-12 col-md-10 mt-5 pt-5 pb-5 bg-light">
            
                        <h4><p class="text-primary">Check  Parcel Status By the UID:</p></h4>
                        <form class="form-inline mt-3" action="{{route('status')}}" method="POST">
                            {{csrf_field()}}
                            <input class="form-control mr-sm-2" type="search" placeholder="Search User" aria-label="Search" name="id">
                            <button class="btn btn-outline-primary my-2 my-sm-0" type="submit">Search</button>
                        </form>              
    </div> --}}
  

    </body>
</html>
