@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-">
            
        </div>
        
        <div class="col-lg-12 col-md-10 mt-5 p-3">
            <div class="row justify-content-center">
                <div class="col-md-10 ">
                    {{-- list of the Parcel --}}
                    <br><br>
                    <h4>Search Parcel</h4>
                    <div class="">
                        <nav class="navbar navbar-light bg-light">
                          <form class="form-inline" method="get" action="">
                            <input class="form-control mr-sm-2" type="search" placeholder="Search Another Parcel" aria-label="Search">
                            <button class="btn btn-outline-primary my-2 my-sm-0" type="submit">Search</button>
                          </form>
                        </nav>
                    </div>


                    <table class="table table-hover">
                  <thead>
                    <tr>
                      <th scope="col">id</th>
                      <th scope="col">Sent By</th>
                      <th scope="col">Receviver</th>
                      <th scope="col">delivery Address</th>
                      <th scope="col">Contact number</th>
                      <th scope="col">Status</th>
                    </tr>
                  </thead>
                  <tbody>
                   
                
                    <tr>
                      <th>{{$item->id}}</th>
                      <td> {{$item->sname}} </td>
                      <td> {{$item->rname}} </td>
                      <td>{{ $item->radd }}</td>
                      <td> {{$item->rnumber }} </td>
                      <td>{{$item->status}}</td>                    
                 
                    </tr>
               
                    
                  </tbody>
                </table>
                    
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
