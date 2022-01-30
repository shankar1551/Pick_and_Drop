<!DOCTYPE html>
<html>
  <head>
    <title>Form Stylng</title>
    <link rel="stylesheet" type="text/css" href="{{ asset('css/parcelcss/parcelregister.css') }}" />
    <style type="text/css">
          #map{ width: 100%; height: 300px; }
    </style>
    {{-- <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js"></script> --}}
  </head>

  <body>
    <div class="form-container">
      <div class="main">
      <h2 class="ch1"><u>Request For Parcel PickUp</u></h2>

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

        <div class="hell">
          <label for="sname">Sender Name</label>
          <input type="text" id="sname" name="sname" placeholder="Name" value="shankar" />
        </div>

        <div class="hell">
          <label for="address">Senders's Address</label>
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
          <label for="snumber">Sender Contact No.</label>
          <input type="number" id="snum" name="snumber" placeholder="Contact No." value="789654" />
        </div>

        <div class="hell">
          <label for="rname">Receiver Name</label>
          <input type="text" id="rname" name="rname" placeholder="Name" value="r shankar" />
        </div>

        <div class="hell">
          <label for="address">Receiver's Address</label>
          <input type="text" id="radd" name="radd" placeholder="Address" value="raddress" />
          <div class="cordinate-div">
            
          </div>
        </div>

        <div class="hell">
          <label for="rnumber">Receiver Mobile No.</label>
          <input type="number" id="rnum" name="rnumber" placeholder="Contact No." value="123456" />
        </div>

        <div class="hell">
          <label for="weight">Parcel Weight</label>
          <input  type="number"  id="pweight" name="pweight" placeholder="Weight" value="2" />
        </div>

        <div class="hell">
          <label for="number">Parcel's Dimension</label>
          
          <label for="number">length</label>
          <input type="number" id="plength" name="plength"  placeholder="Length" value="1" />

          <label for="number">width</label>
          <input type="number" id="pwidth" name="pwidth" placeholder="width" value="12" />

          <label for="number">height</label>
          <input   type="number" id="pheight"  name="pheight" placeholder="Height" value="12" />
        </div>

        <div class="hell">
          <label>Comment If Any</label>
          <textarea name="comment" class="form-control" > Lorem ipsum dolor sit, amet consectetur adipisicing, elit. Commodi, at dolore, consectetur quam rem sit dicta laborum in nisi nesciunt totam, dolores. Perferendis ut non, reprehenderit debitis, similique illum aliquid. </textarea>
        </div>

        <input type="submit" class="btn">
      </form>
      {{-- ====Form end=== --}}
      </div>  
    </div>
    
  </body>
{{-- 
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
</script> --}}

</html>
