@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        
        <div class="col-md-10 bg-light">
            <a href="#" class="btn btn-primary">Employee List</a>
            <a href="#" class="btn btn-primary">Add Employee</a>
            <a href="#" class="btn btn-primary">Search Parcel</a>
            <a href="#" class="btn btn-primary">Check Status</a>
            <a href="#" class="btn btn-primary">Pickup For Today</a>
            <a href="#" class="btn btn-primary">Delivery for today</a>
            
        </div>
        <div class="col-lg-12 col-md-12 py-4 mt-5 bg-light">
            <div class="row justify-content-center">
                <div class="col-md-4 ">
                        <div class="card text-center" style="width: 18rem;">
                          {{-- <img class="card-img-top" src="..." alt="Card image cap"> --}}
                          <div class="card-body">
                            <h1 class="card-title">5</h1>
                            <p class="card-text">Parcels to pick today .</p>
                            <a href="#" class="btn btn-primary">See list</a>
                          </div>
                        </div>
                </div>
                <div class="col-md-4 ">
                        <div class="card text-center" style="width: 18rem;">
                          {{-- <img class="card-img-top" src="..." alt="Card image cap"> --}}
                          <div class="card-body">
                            <h1 class="card-title">5</h1>
                            <p class="card-text">Total Users .</p>
                            <a href="#" class="btn btn-primary">See list</a>
                          </div>
                        </div>
                </div>
                <div class="col-md-4 ">
                        <div class="card text-center" style="width: 18rem;">
                          {{-- <img class="card-img-top" src="..." alt="Card image cap"> --}}
                          <div class="card-body">
                            <h1 class="card-title">5</h1>
                            <p class="card-text">Employes workingg today .</p>
                            <a href="#" class="btn btn-primary">See list</a>
                          </div>
                        </div>
                </div>
                <div class="col-md-4 p-2">
                        <div class="card text-center" style="width: 18rem;">
                          {{-- <img class="card-img-top" src="..." alt="Card image cap"> --}}
                          <div class="card-body">
                            <h5 class="card-title">Card title</h5>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            <a href="#" class="btn btn-primary">Go somewhere</a>
                          </div>
                        </div>
                </div>
                <div class="col-md-4 p-2 ">
                        <div class="card text-center" style="width: 18rem;">
                          {{-- <img class="card-img-top" src="..." alt="Card image cap"> --}}
                          <div class="card-body">
                            <h5 class="card-title">Card title</h5>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            <a href="#" class="btn btn-primary">Go somewhere</a>
                          </div>
                        </div>
                </div>
            </div>
        </div>
        <div class="col-lg-12 col-md-10 mt-5 pt-5 pb-5 bg-light">
            
                        <h4><p class="text-primary">Check  Parcel Status By the UID:</p></h4>
                        <form class="form-inline mt-3" action="{{route('status')}}" method="POST">
                            {{csrf_field()}}
                            <input class="form-control mr-sm-2" type="search" placeholder="Search User" aria-label="Search" name="id">
                            <button class="btn btn-outline-primary my-2 my-sm-0" type="submit">Search</button>
                        </form>
                  
        </div>


    </div>
</div>
@endsection
