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
                            <input class="form-control mr-sm-2" type="search" placeholder="Search Employee" aria-label="Search">
                            <button class="btn btn-outline-primary my-2 my-sm-0" type="submit">Search</button>
                          </form>
                        </nav>
                    </div>


                    <table class="table table-hover">
                  <thead>
                    <tr>
                      <th scope="col">id</th>
                      <th scope="col">First</th>
                      <th scope="col">Last</th>
                      <th scope="col">email</th>
                      <th scope="col">image</th>
                      <th scope="col">role</th>
                      <th scope="col">Contact number</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <th scope="row">1</th>
                      <td>Mark</td>
                      <td>Otto</td>
                      <td>@mdo</td>
                      <td>sam@g.com</td>
                      <td>0987654</td>
                      <td>delivery man</td>
                      <td><a href="#" class="btn btn-primary">Remove</a></td>
                      <td><a href="#" class="btn btn-primary">Edit</a></td>
                    </tr>
                    <tr>
                      <th scope="row">2</th>
                      <td>Jacob</td>
                      <td>Thornton</td>
                      <td>@fat</td>
                    </tr>
                    <tr>
                      <th scope="row">3</th>
                      <td colspan="2">Larry the Bird</td>
                      <td>@twitter</td>
                    </tr>
                  </tbody>
                </table>
                    
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
