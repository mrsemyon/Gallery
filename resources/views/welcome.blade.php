@extends('layout')

@section('content')
<div class="container">
    <h1 align="center">My gallery</h1>
    <div class="row">
        @foreach($images as $image)
            <div class="col-md-3 px-4 py-2">
                <img src="{{$image->image}}" class="img-thumbnail" alt="Laravel">
                <div class="row justify-content-center">
                    <a href="/show/{{$image->id}}"  type="button" class="m-2 btn btn-info">Info</a>
                    <a href="/edit/{{$image->id}}"   type="button" class="m-2 btn btn-warning">Edit</a>
                    <a href="/delete/{{$image->id}}" onclick="return confirm('Are you sure?')" type="button" class="m-2 btn btn-danger">Delete</a>
                </div>
            </div>
        @endforeach
    </div>
</div>
@endsection
