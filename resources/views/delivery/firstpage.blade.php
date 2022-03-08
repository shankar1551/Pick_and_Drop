@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                

                {{-- <div class="card-body">
                    
                   @foreach($path as $item)
                   

                       {{$item->id}}

                       <div class="single" id='single{{$item->id}}' style="border: 5px solid black;">
                           <h1>Receiver</h1>
                           {{$item->rname}}

                           <h1>Mobile</h1>
                           {{$item->rnumber}}

                           <h1>Address</h1>
                           {{$item->radd}}

                           <div class="map-div">
                               location map 
                           </div>

                           <button onclick="hideDiv({{$item->id}})" class="{{$item->id}}"  id='hide'> Delivered</button>
                           <button >Delivery Failed</button>
                           <br><br><br>
                       </div>
                        
                            

                   @endforeach
                </div>
            </div> --}}

                <div class="card">
                  <div class="card-header">
                    Featured
                  </div>
                  <div class="card-body">
                    <h5 class="card-title">Welcome @auth
                           {{ auth()->user()->name }}
                          @else
                          // log failed
                        @endauth
                    </h5>
                    <p class="card-text">Here is the list of delivery to made</p>
                        <table class="table table-dark">
                            <thead>
                            <tr>
                                <th scope="col">S. no</th>
                                <th scope="col">Name</th>
                                <th scope="col">Address</th>
                                <th scope="col">Mobile</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($data as $item)
                            <tr>
                                <td >1</td>
                                <td>{{$item->rname}}</td>
                                <td>{{$item->radd}}</td>
                                <td> {{$item->rnumber}} </td>
                            </tr>
                            @endforeach
                            
                            </tbody>
                            </table>


                    <a href="{{ route('delivery_index') }}" class="btn btn-primary">Start Delivery </a>
                  </div>
                </div>
        </div>
    </div>
</div>


@endsection
