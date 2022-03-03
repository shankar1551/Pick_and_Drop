@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Showingn indivisual items to the users</div>

                <div class="card-body">
                   {{$parcel->sname}} <br>
                   {{$parcel->rname}}<br>
                   {{$parcel->sadd}} <br>
                   {{$parcel->radd}}
                    there sould be a logout button
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
