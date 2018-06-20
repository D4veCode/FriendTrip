@extends('layouts.admin.app')

@section('content')
<div class="container">
    <div class="row">
        <h1>Subscribers!</h1>
        <div class="col-12 col-md-12">
            <table class="table table-hover">
                <thead class="thead-dark">
                    <tr>
                        <th >#ID</th>
                        <th width="300px">Subscriber</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($subs as $sub)  
                    <tr>
                        <td>{{$sub->id}}</td>
                        <td>{{$sub->email}}</td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
    
</div>


@endsection