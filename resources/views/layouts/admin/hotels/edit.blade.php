@extends('layouts.admin.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Editando Hotel</div>

                <div class="card-body">
                    @if (session('success'))
                        <div class="alert alert-success">
                            {{ session('success') }}
                        </div>
                    @endif

                    <form action="{{ route('hotels.update') }}" method="POST"
                        enctype="multipart/form-data">
                        @csrf
			            <input name="_method" type="hidden" value="PUT">
                        <div class="form-group">
                            <label for="image">Imagen</label>
                            <input type="file" name="fileimage" id="fileimage" class="form-control">
			            </div>
                        <div class="form-group">
                            <label for="name">Name</label>
                        <input type="text" name="name" id="name" value="{{ $hotel->name or old('name') }}" class="form-control" placeholder="{{$hotel->name}}">
                        </div>
                        <div class="form-group">
                            <label for="price">Price</label>
                        <input type="text" name="price" id="price" value="{{ $hotel->price or old('price') }}" class="form-control" placeholder="{{$hotel->price}}">
                        </div>
                        <div class="form-group">
                            <label for="location">Location</label>
                        <input type="text" name="location" id="location" value="{{ $hotel->location or old('location') }}" class="form-control" placeholder="{{$hotel->location}}">
                        </div>
                        <div class="form-group">
                            <label for="description">Description</label>
                        <input type="text" name="description" id="tidescriptiontle" value="{{ $hotel->description or old('description') }}" class="form-control" placeholder="{{$hotel->description}}">
                        </div>
                        <div class="form-group">
                            <label for="room_type">Room Type</label>
                        <input type="text" name="room_type" id="room_type" value="{{ $hotel->room_type or old('room_type') }}" class="form-control" placeholder="{{$hotel->room_type}}">
                        </div>
                        <button type="submit">Enviar</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection