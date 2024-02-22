@extends('admin.parent')

@section('content')

<div class="card p-4">
    @csrf
    @method('PUT')

    {{-- method post = create --}}
    {{-- method delete = delete --}}
    {{-- method put = update --}}
    {{-- method patch = update --}}

    <label for="">Name Category</label>
    <input type="text" value="{{ $Category->name }}" class="form-control" disabled>

</div>

@endsection