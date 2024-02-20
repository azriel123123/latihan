@extends('admin.parent');

@section('content')

<div class="card">
    <h1>ini catagory index </h1>

    <hr>

    <div class="container d-flex justify-content-end">
        <a href="{{ route('catagory.create') }}" class="btn btn-success">Create Catagory</a>
    </div>
</div>

@endsection