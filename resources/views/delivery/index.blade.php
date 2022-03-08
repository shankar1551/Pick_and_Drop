@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header"> <h3 class="text-dark">List OF Delevery to be made </h3> <br> </div>

               
                <div class="jumbotron bg-light">
                    <div class="row">
                        <div class="col-lg-6 col-md-6">
                            Employee Id: 1
                        </div>
                        <div class="col-lg-6 col-md-6">
                            Employee Name: Hari Bahadur Ghimire    
                        </div>
                        
                    </div>
                </div>




                <div class="card-body">
                    
                   @foreach($path as $item)
                   

                       {{-- {{$item->id}} --}}

                       <div class="single" id='single{{$item->id}}'>
                           <h4 class="class-title text-dark">Receiver Name</h4>
                           <h5 class="class-subtitle mb-2">{{$item->rname}}</h5>

                           <h4 class="class-title text-dark">Receiver Mobile </h4>
                           <h5 class="class-subtitle mb-4">{{$item->rnumber}}</h5>
                           

                           <h4 class=" class-title text-dark">Receiver Address</h4>
                           <h5 class="class-subtitle mb-5 ">{{$item->radd}}</h5>
                           {{-- {{$item->radd}} --}}

                           

                           <button onclick="hideDiv(event,{{$item->id}})" class="{{$item->id}} btn btn-primary"  id='hide'> Delivered</button>
                           <button onclick="hideDiv(event,{{$item->id}})" class="{{$item->id}} btn btn-primary"  id='hide' >Delivery Failed</button>
                           <br><br><br>
                       </div>

                       <hr><hr class="mb-4">
                        
                   @endforeach
                </div>
            </div>


               

            <div class="col-lg-12">
                <a href=" {{ route('delivery_home') }} " class="btn btn-primary mb-5">Delivery Completed Go to Home Page</a>
            </div>

        </div>
    </div>
</div>


@endsection
