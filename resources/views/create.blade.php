@extends('layout')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-5">
            <h1 class="mt-5">Add image</h1>
            <form action="" method="POST">
                <div class="form-control">
                    <input type="file">
                </div>
                <div class="form-control">
                    <button type="submit" class="btn btn-success">Submit</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
