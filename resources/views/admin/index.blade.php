@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        
        <div class="col-md-10 ">
            <a href="{{ route('admin_users_view') }}" class="btn btn-primary">Employee List</a>
            <a href="{{route('admin.create')}}" class="btn btn-primary">Add Employee</a>
            <a href="#form_s" class="btn btn-primary">Search Parcel</a>
            <a href="#form_s" class="btn btn-primary">Check Status</a>
            <a href="{{route('admin_parcel_view')}}" class="btn btn-primary">View Parcels</a>
            
            
        </div>
        <div class="col-md-10 m-auto  mt-4 mb-4 p-2">
                @if($msg!='')

                    <h3 class="text-dark">{{$msg}}</h3>

                @endif
        </div>
        <div class="col-lg-12 col-md-12 py-4 mt-5 bg-light">
            <div class="row justify-content-center">
                <div class="col-md-4 ">
                        <div class="card text-center" style="width: 18rem;">
                          {{-- <img class="card-img-top" src="..." alt="Card image cap"> --}}
                          <div class="card-body">
                            <h1 class="card-title">{{$parcelCount}}</h1>
                            <p class="card-text">Parcels to pick today .</p>
                            {{-- <a href="#" class="btn btn-primary"></a> --}}
                          </div>
                        </div>
                </div>
                <div class="col-md-4 ">
                        <div class="card text-center" style="width: 18rem;">
                          {{-- <img class="card-img-top" src="..." alt="Card image cap"> --}}
                          <div class="card-body">
                            <h1 class="card-title">{{$usercount}}</h1>
                            <p class="card-text">Total Users .</p>
                            {{-- <a href="#" class="btn btn-primary">See list</a> --}}
                          </div>
                        </div>
                </div>
                <div class="col-md-4 ">
                        <div class="card text-center" style="width: 18rem;">
                          {{-- <img class="card-img-top" src="..." alt="Card image cap"> --}}
                          <div class="card-body">
                            <h1 class="card-title">{{$employee}}</h1>
                            <p class="card-text">Employes workingg today .</p>
                            {{-- <a href="#" class="btn btn-primary">See list</a> --}}
                          </div>
                        </div>
                </div>
                
                
            </div>
        </div>
        <div class="col-lg-12 col-md-10 mt-5 pt-5 pb-5 bg-light">
            
                        <h4><p class="text-primary">Check  Parcel Status By the UID:</p></h4>
                        <form class="form-inline mt-3" action="{{route('status')}}" method="POST" id="form_s">
                            {{csrf_field()}}
                            <input class="form-control mr-sm-2" type="search" placeholder="Search User" aria-label="Search" name="id">
                            <button class="btn btn-outline-primary my-2 my-sm-0" type="submit">Search</button>
                        </form>
                  
        </div>


    </div>
</div>
@endsection
