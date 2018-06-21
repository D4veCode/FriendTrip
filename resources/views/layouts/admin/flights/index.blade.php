
@extends('layouts.admin.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card" style="width: 70em;">
                <div class="card-header">Listado de Vuelos <a href="{{ route('flights.create') }}" class="btn btn-primary">Create</a></div>

                <div class="card-body">
                    @if (session('success'))
                        <div class="alert alert-success">
                            {{ session('success') }}
                        </div>
                    @endif
                    <table class="table table-bordered">
                        <thead class="thead-dark">
                            <th>#</th>
                            <th>Flight Number</th>
                            <th>Airline</th>
                            <th>Descripcion</th>
                            <th>Destination</th>
                            <th>Departure</th>
                            <th>Arrive</th>
                            <th>Price</th>
                            <th>Airline Image</th>
                            <th colspan="2">Acciones</th>
                        </thead>
                        <tbody>
                          @foreach($flights as $flight)
                          <tr>
                            <td>{{ $flight->id }}</td>
                            <td>{{ $flight->num_flight }}</td>
                            <td>{{ $flight->airline }}</td>
                            <td>{{ $flight->description }}</td>
                            <td>{{ $flight->destination }}</td>
                            <td>{{ $flight->date_dep }}</td>
                            <td>{{ $flight->date_des }}</td>
                            <td>{{ $flight->price }}</td>
                            <td><img src="{{ asset('gallery/' . $flight->airline_image) }}" alt="{{ $flight->airline_image }}" width="150"></td>
                            <td><a href="{{ route('flights.edit', $flight->id) }}" class="btn btn-primary">Edit</a></td>
                            <td><a href="{{ route('flights.destroy', $flight->id) }}" class="btn btn-danger">Delete</a></td>
                          </tr>
                          @endforeach
                        </tbody>
                    </table>
                    {{ $flights->links() }}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection