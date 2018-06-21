@extends('layouts.admin.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Creando un Vuelo</div>

                <div class="card-body">
                    @if (session('success'))
                        <div class="alert alert-success">
                            {{ session('success') }}
                        </div>
                    @endif

                    <form action="{{ route('flights.store') }}" method="POST"
                        enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <label for="fileimage">Airline Image</label>
                            <input type="file" name="airline_image" id="fileimage" class="form-control">
			            </div>
                        <div class="form-group">
                            <label for="airline">Airline</label>
                        <input type="text" name="airline" id="airline" value="{{ $flight->airline or old('airline') }}" class="form-control" placeholder="{{$flight->airline}}">
                        </div>
                        <div class="form-group">
                            <label for="price">Price</label>
                        <input type="text" name="price" id="price" value="{{ $flight->price or old('price') }}" class="form-control" placeholder="{{$flight->price}}">
                        </div>
                        <div class="form-group">
                            <label for="destination">Destination</label>
                        <input type="text" name="destination" id="destination" value="{{ $flight->destination or old('destination') }}" class="form-control" placeholder="{{$flight->destination}}">
                        </div>
                        <div class="form-group">
                            <label for="description">Description</label>
                        <input type="text" name="description" id="tidescriptiontle" value="{{ $flight->description or old('description') }}" class="form-control" placeholder="{{$flight->num_flight}}">
                        </div>
                        <div class="form-group">
                            <label for="date_dep">Date Departure</label>
                            <input type="text" name="date_dep" id="date_dep" value="{{ $flight->date_dep or old('date_dep') }}" class="form-control" placeholder="{{$flight->num_flight}}">
                        </div>
                        <div class="form-group">
                            <label for="date_des">Date Arrive</label>
                            <input type="text" name="date_des" id="date_des" value="{{ $flight->date_des or old('date_des') }}" class="form-control" placeholder="{{$flight->num_flight}}">
                        </div>
                        <div class="form-group">
                            <label for="num_flight">Flight number</label>
                            <input type="text" name="num_flight" id="num_flight" value="{{ $flight->num_flight or old('num_flight') }}" class="form-control" placeholder="{{$flight->num_flight}}">
                        </div>
                        <button type="submit">Enviar</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection