@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Index page of thhe delivery man list of deliveries to made is presented here <br>Login is necessary </div>

                <div class="card-body">
                    
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
            </div>
        </div>
    </div>
</div>


@endsection
