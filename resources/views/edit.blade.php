@extends('layout')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-5">
            <h1 class="mt-5">Edit image</h1>
            <img src="/{{$image->image}}" alt="Laravel" class="img-thumbnail">
            <form action="/update/{{$image->id}}" method="POST" enctype="multipart/form-data">
                {{csrf_field()}}
                <div class="form-control">
                    <input type="file" name="image">
                </div>
                <div class="form-control">
                    <button type="submit" class="btn btn-success">Submit</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
