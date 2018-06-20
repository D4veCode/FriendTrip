@extends('layouts.admin.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Editando Imagen</div>

                <div class="card-body">
                    @if (session('success'))
                        <div class="alert alert-success">
                            {{ session('success') }}
                        </div>
                    @endif

                    <form action="{{ route('gallery.update') }}" method="POST"
                        enctype="multipart/form-data">
                        @csrf
			        <input name="_method" type="hidden" value="PUT">
                    <div class="form-group">
                        <label for="image">Imagen</label>
                        <input type="file" name="fileimage" id="fileimage" class="form-control">
			        </div>
			        <div class="form-group">
                        <label for="title">Titulo</label>
                        <input type="text" name="title" id="title" value="{{ $gallery->title or old('title') }}" class="form-control" placeholder="{{$gallery->title}}">
			        </div>
			        <div class="form-group">
                        <label for="body">Body</label>
                    <input type="text" name="body" id="body" value="{{ $gallery->body or old('body') }}" class="form-control" placeholder="{{$gallery->body}}">
			        </div>
                        <button type="submit">Enviar</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection