@extends('admin.parent')

@section('content')

<div class="card p-4">

    <label for="">Name Category</label>
    <input type="text" value="{{ $Category->name }}" class="form-control" disabled>

    <label for="">ID Category</label>
    <input type="text" value="{{ $Category->id }}" class="form-control" disabled>

</div>

@endsection