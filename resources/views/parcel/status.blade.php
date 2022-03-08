@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            
            <div>
                 <div class="jumbotron">
                  <h1 class="display-7 text-dark">Parcel Status For UID: {{$id}}</h1>
                 
                    <hr class="my-5">
                    {{-- <hr class="my-4">  --}}
                 
                
                @if($parcel!='null')
                <div class="row mt-3 justify-content-center">
                    <div class="col-lg-12 col-md-12 col-sm-12 justify-content-center">
                        <h2 class="text-success">Current Status: {{$parcel->status}}</h2>
                    </div>
                    
                     <div class="col-lg-6 col-md-6 pt-3 pb-3 mt-2">
                         <h5 class="text-dark ">Sender: {{$parcel->sname}}</h5>
                    </div>
                     <div class="col-lg-6 col-md-6 pt-2 pb-2 mt-2">
                         <h5 class="text-dark">Receiver: {{$parcel->rname}}</h5>
                     </div>
                     <hr class="bg-dark">
                     <div class="col-lg-6 col-md-6 pt-2 pb-2 mt-2">
                         <h5 class="text-dark">Sender Address: {{$parcel->sadd}}</h5>
                     </div>
                     <div class="col-lg-6 col-md-6 pt-2 pb-2 mt-2">
                          <h5 class="text-dark">Receiver Address: {{$parcel->radd}} </h5>
                     </div>
                     <div class="col-lg-6 col-md-6 pt-2 pb-2 mt-2">
                          <h5 class="text-dark">Sender Mobile Number: {{$parcel->snumber}} </h5>
                     </div>
                     <div class="col-lg-6 col-md-6 pt-2 pb-2 mt-2">
                         <h5 class="text-dark">Receiver Mobile Number: {{$parcel->rnumber}}</h5>
                     </div>
                     
                </div>
                @else
                <div class="row bg-dark">
                    <h4 class="text-secondary">SORRY!!  No Record Found for {{$id}}</h4>
                </div>
                @endif
                  
                 <hr class="py-4">
                  <div class="col-lg-10 col-md-10 mt-5 p-5">
                        <h4><p class="text-primary">Check Another Parcel</p></h4>
                        <form class="form-inline mt-3" action="{{route('status')}}" method="POST">
                            {{csrf_field()}}
                            <input class="form-control mr-sm-2" type="search" placeholder="Search Parcel" aria-label="Search" name="id">
                            <button class="btn btn-outline-primary my-2 my-sm-0" type="submit">Search</button>
                        </form>
                  </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
