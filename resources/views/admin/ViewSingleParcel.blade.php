@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-">
            {{-- <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('You are logged in!') }}
                    there sould be a logout button
                    Admin panels should be displayed
                    Admin will Create the other users
                </div>
            </div> --}}
        </div>
        <div class="col-md-10 bg-light mt-5">
            <a href="{{ route('admin_users_view') }}" class="btn btn-primary">Employee List</a>
            <a href="{{route('admin.create')}}" class="btn btn-primary">Add Employee</a>
            <a href="#form_s" class="btn btn-primary">Search Parcel</a>
            <a href="#form_s" class="btn btn-primary">Check Status</a>
            <a href="{{route('admin_parcel_view')}}" class="btn btn-primary">View Parcels</a>
            <a href="{{route('admin.index')}}" class="btn btn-primary">Return To Admin Home</a>
            
            
        </div>
        <div class="col-lg-12 col-md-10 mt-5 p-3">
            <div class="row justify-content-center">
                <div class="col-md-10 ">
                    list of the employeyes to be displayed here
                    <br><br>
                    <h4>Search An Employee</h4>
                    <div class="">
                        <nav class="navbar navbar-light bg-light">
                          <form class="form-inline">
                            <input class="form-control mr-sm-2" type="search" placeholder="Search User" aria-label="Search">
                            <button class="btn btn-outline-primary my-2 my-sm-0" type="submit">Search</button>
                          </form>
                        </nav>
                    </div>


                    


                    <div class="jumbotron">
                      <h1 class="display-6"> Complete Information of User</h1>
                      <hr class="my-4">
                      <div class="row">
                        <div class="col-md-6 col-lg-6 bg-warning mt-3">
                            <h4>sent by:shankar</h4>
                        </div>
                        <div class="col-md-5 col-lg-6 bg-dark mt-3">
                            <h4>Receiver:Shankar pookhrel</h4>
                        </div>

                        <div class="col-md-6 col-lg-6 bg-warning mt-3">
                            <h4>sent by:shankar</h4>
                        </div>
                        <div class="col-md-5 col-lg-6 bg-dark mt-3">
                            <h4>Receiver:Shankar pookhrel</h4>
                        </div>
                        
                        <div class="col-md-6 col-lg-6 bg-warning mt-3">
                            <h4>sent by:shankar</h4>
                        </div>
                        <div class="col-md-5 col-lg-6 bg-dark mt-3">
                            <h4>Receiver:Shankar pookhrel</h4>
                        </div>
                           
                      </div>

                      <div class="mt-4">
                          <a href="#" class="btn btn-primary">Remove User</a>
                          {{-- <a href="#" class="btn btn-primary">Mark as Delive</a> --}}
                      </div>

                     
                    </div>
                    


              </div>
            </div>
        </div>
    </div>
</div>
@endsection
