@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
           
           
        @if(session()->get('msg')!=null)
            <div class="bg-info p-5">
                
                 <h4 class="text-dark card-text">
                   
                       {{ session()->get('msg') }} 
               </h4> 

            </div>
        @endif

          



        </div>

        <div class="col-md-8 mt-4 pt-4 mb-5">
            
            <h2 class="text-dark">
                <h3 class="text-dark"> Pickup Request Order</h3>
                <a href="{{route('parcel.create')}}" class="btn btn-primary">Request Pickup</a>
            </h2>

        </div>    
        {{-- <hr> --}}
        <div class="col-md-8 col-sm-8 mt-5">
            <h2 class="text-dark pb-2 ">My previous Requests</h2>
           <table class="table">
              <thead class="thead-dark">
                <tr>
                  <th scope="col">id</th>
                  <th scope="col">Order Date</th>
                  <th scope="col">Delivery Address</th>
                  <th scope="col">Receiver Number</th>
                  <th scope="col">View</th>
                  {{-- <th scope="col">Delete</th> --}}

                </tr>
              </thead>
              <tbody>
           @if($items!=null)
               @foreach($items as $item)
                <tr>
                  <th>{{$item->id}}</th>
                  <td>{{$item->created_at}}</td>
                  <td>{{$item->radd}}</td>
                  <td>{{$item->rnumber}}</td>
                  <td><a href="{{ route('parcel_view',$item->id) }}" class="btn btn-primary">View</a></td>
                  {{-- <td><a href="" class="btn btn-primary">Delete From Histor</a></td> --}}
                </tr>
                @endforeach
            @else
            
                <tr>
                  <td colspan="4">No Record Found</td>
                </tr>


            @endif
                
              </tbody>
            </table>

            
        </div>

        <div class="col-md-8 mt-5 pt-5 pb-4">
            <h4 class="text-primary">Saerch for the parcel Using UID</h4>
            <form class="form-inline mt-3" action="{{route('status')}}" method="POST">
                            {{csrf_field()}}
                            <input class="form-control mr-sm-2" type="search" placeholder="Search User" aria-label="Search" name="id">
                            <button class="btn btn-outline-primary my-2 my-sm-0" type="submit">Search</button>
            </form>
        </div>

        <div class="col-md-8 mt-4 pt-4">
            
            <h2 class="text-dark">
                <h3 class="text-dark"> Pickup Request Order</h3>
                <a href="{{route('parcel.create')}}" class="btn btn-primary">Request Pickup</a>
            </h2>

        </div>    





    </div>
    {{-- //end of row --}}

</div>
@endsection
