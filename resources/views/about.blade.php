@extends('layouts.app')

@section('content')


 <div class="about-section">
  <h1>About Us Page</h1>
  <p>Remember Us to send your parcel to your loved ones in efficient manner.</p>
  <p>Resize the browser window to see that this page is responsive by the way.</p>
</div>

<h2 style="text-align:center">Our Team</h2>
<div class="row">
  <div class="column">
    <div class="card">
      <img src="/w3images/team1.jpg" alt="Jane" style="width:100%">
      <div class="container">
        <h2>Jane Doe</h2>
        <p class="title">CEO & Founder</p>
        <p>Some text that describes me lorem ipsum ipsum lorem.</p>
        <p>jane@example.com</p>
        <p><button class="button">Contact</button></p>
      </div>
    </div>
  </div>

  <div class="column">
    <div class="card">
      <img src="/w3images/team2.jpg" alt="Mike" style="width:100%">
      <div class="container">
        <h2>Mike Ross</h2>
        <p class="title">Art Director</p>
        <p>Some text that describes me lorem ipsum ipsum lorem.</p>
        <p>mike@example.com</p>
        <p><button class="button">Contact</button></p>
      </div>
    </div>
  </div>

  <div class="column">
    <div class="card">
      <img src="/w3images/team3.jpg" alt="John" style="width:100%">
      <div class="container">
        <h2>John Doe</h2>
        <p class="title">Designer</p>
        <p>Some text that describes me lorem ipsum ipsum lorem.</p>
        <p>john@example.com</p>
        <p><button class="button">Contact</button></p>
      </div>
    </div>
  </div>
</div>     

     



      
      <div class="row">
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



@endsection


















































