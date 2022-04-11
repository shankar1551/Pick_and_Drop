<!DOCTYPE html>
<html>
  <head>
    <title>Create Parcel</title>
    <link rel="stylesheet" type="text/css" href="{{ asset('css/parcelcss/parcelregister.css') }}" />
     <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/bootstrap.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="http://localhost/send/public/css/shop.css" />
    <script    src="https://use.fontawesome.com/releases/v5.15.3/js/all.js"     data-auto-replace-svg="nest"  >   </script>
    <script    src="https://code.jquery.com/jquery-3.5.1.slim.min.js"      integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"      crossorigin="anonymous"    ></script>
    <script    src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"      integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN"      crossorigin="anonymous"  ></script>
    <script    src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.min.js"      integrity="sha384-+YQ4JLhjyBLPDQt//I+STsc9iw4uQqACwlvpslubQzn4u2UU2UFM80nGisd026JF"      crossorigin="anonymous"    ></script>
    <script src="{{ asset('css/shop.js') }}"></script>
    <style type="text/css">
          #map{ width: 100%; height: 300px; }
    </style>
    <link href="{{ asset('css/bootstrap.css') }}" rel="stylesheet">
    <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js"></script>
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


    <div class="form-container ">
      <div class="main">
      <h2 class="ch1"><u class="text-dark">Request For Parcel Pick-Up</u></h2>

      <div class="error div">    
          @if ($errors->any())
              <div class="alert alert-danger">
                  <ul>
                      @foreach ($errors->all() as $error)
                          <li>{{ $error }}</li>
                      @endforeach
                  </ul>
              </div>
          @endif
      </div>


      {{-- ======Form For Creating product======== --}}
      <form method="POST" action="{{ route('parcel.store') }}">
          @csrf

        <div class="hell form-group">
          <label for="sname" class="text-dark">Sender Name</label>
          <input type="text" class="form-control" id="sname" name="sname" placeholder="Name" value="shankar" />
        </div>

        <div class="hell">
          <label for="address" class="text-dark">Senders's Address</label>
          <input type="text" id="sadd" name="sadd" placeholder="Address" value="shankar add"/>
          <div class="cordinate-div">
              <h1>Select a location!</h1>
              <p>Click on a location on the map to select it. Drag the marker to change location.</p>
        
              <!--map div-->
              <div id="map"></div>
            
              <!--our form-->
              <h2>Chosen Location</h2>    
                  pick up location <br>
                  <input type="text" id="lat" name="lat" readonly="yes" value="27.67364693334881"><br>
                  <input type="text" id="lng" name="lng" readonly="yes" value="83.41987609863281">

                    <button id="firstLocation">Pick Up location is correct</button>

                  <br><br>
                  Drop location <br>
                  <input type="text" id="lat2" name="lat2" readonly="yes" value="83.41987609863281"><br>
                  <input type="text" id="lng2" name="lng2" readonly="yes" value="83.41987609863281">

                  <!-- <button id="secondLocation">Drop Up location is correct</button> -->
          </div>
        </div>

        <div class="hell">
          <label for="snumber" class="text-dark">Sender Contact No.</label>
          <input type="number" id="snum" name="snumber" placeholder="Contact No." value="789654" />
        </div>

        <div class="hell">
          <label for="rname" class="text-dark">Receiver Name</label>
          <input type="text" id="rname" name="rname" placeholder="Name" value="r shankar" />
        </div>

        <div class="hell">
          <label for="address" class="text-dark">Receiver's Address</label>
          <input type="text" id="radd" name="radd" placeholder="Address" value="raddress" />
          <div class="cordinate-div">
            
          </div>
        </div>

        <div class="hell">
          <label for="rnumber" class="text-dark">Receiver Mobile No.</label>
          <input type="number" id="rnum" name="rnumber" placeholder="Contact No." value="123456" />
        </div>

        <div class="hell">
          <label for="weight" class="text-dark">Parcel Weight</label>
          <input  type="number"  id="pweight" name="pweight" placeholder="Weight" value="2" />
        </div>

        <div class="hell">
          <label for="number" class="text-dark">Parcel's Dimension(in centimeter)</label>
          
          <label for="number" class="text-dark">length</label>
          <input type="number" id="plength" name="plength"  placeholder="Length" value="1" />

          <label for="number" class="text-dark">width</label>
          <input type="number" id="pwidth" name="pwidth" placeholder="width" value="12" />

          <label for="number" class="text-dark">height</label>
          <input   type="number" id="pheight"  name="pheight" placeholder="Height" value="12" />
        </div>

        <div class="hell">
          <label class="text-dark">Comment If Any</label>
          <textarea name="comment" class="form-control" > Lorem ipsum dolor sit, amet consectetur adipisicing, elit. Commodi, at dolore, consectetur quam rem sit dicta laborum in nisi nesciunt totam, dolores. Perferendis ut non, reprehenderit debitis, similique illum aliquid. </textarea>
        </div>

        <input type="submit" class="btn btn-primary ml-5">
      </form>
      {{-- ====Form end=== --}}
      </div>  
    </div>
    
  </body>

     <script type="text/javascript">
            

            //map.js
                    


                    //Set up some of our variables.
                    var map; //Will contain map object.
                    var marker = false; ////Has the user plotted their location marker? 
                            
                    //Function called to initialize / create the map.
                    //This is called when the page has loaded.
                    function initMap() {

                        //The center location of our map.
                        var centerOfMap = new google.maps.LatLng(27.6866, 83.4323);

                        //Map options.
                        var options = {
                          center: centerOfMap, //Set center.
                          zoom: 13 //The zoom value.
                        };

                        //Create the map object.
                        map = new google.maps.Map(document.getElementById('map'), options);

                        //Listen for any clicks on the map.
                        google.maps.event.addListener(map, 'click', function(event) {                
                            //Get the location that the user clicked.
                            var clickedLocation = event.latLng;
                            //If the marker hasn't been added.
                            if(marker === false){
                                //Create the marker.
                                marker = new google.maps.Marker({
                                    position: clickedLocation,
                                    map: map,
                                    draggable: true //make it draggable
                                });
                                //Listen for drag events!
                                google.maps.event.addListener(marker, 'dragend', function(event){
                                    markerLocation();
                                });
                            } else{
                                //Marker has already been added, so just change its location.
                                marker.setPosition(clickedLocation);
                            }
                            //Get the marker's location.
                            markerLocation();
                        });
                    }
                            
                    //This function will get the marker's current location and then add the lat/long
                    //values to our textfields so that we can save the location.
                    function markerLocation(){
                        //Get location.
                        var currentLocation = marker.getPosition();
                        //Add lat and lng values to a field that we can save.
                        
                        if (!firstlocation)
                        {
                            document.getElementById('lat').value = currentLocation.lat(); //latitude
                            document.getElementById('lng').value = currentLocation.lng(); //longitude
                        }

                        else if (firstlocation)
                        {
                            document.getElementById('lat2').value = currentLocation.lat(); //latitude
                            document.getElementById('lng2').value = currentLocation.lng(); //longitude
                        }
                        
                    }
                            
                            
                    //Load the map when the page has finished loading.
                    google.maps.event.addDomListener(window, 'load', initMap);



        // -------------------------------------extra js-----------------------------------------------------


        // setting the first location false this means pickup location is not done in the map
                    var firstlocation=false;
                    var firstOkButton = document.getElementById('firstLocation');
                    // console.log(firstOkButton);
                    firstOkButton.addEventListener('click', function(event)
                    {
                        event.preventDefault();
                        console.log('setting the firstlocation to true');
                        if(firstlocation==false)
                        {
                            firstlocation=true;
                        }

                    })
</script>

</html>
