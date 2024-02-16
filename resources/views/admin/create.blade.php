@extends('admin.parent');

@section('content')
    <!-- General Form Elements -->
    <div class="container d-flex justify-content-center mb-3">
        <a href="{{ route('admin.index') }}" class="btn btn-primary">Balik Halaman</a>
    </div>
    <form>
        <div class="row mb-3">
            <label for="inputText" class="col-sm-2 col-form-label">Nama</label>
            <div class="col-sm-10">
                <input type="text" class="form-control">
            </div>
        </div>
        <div class="row mb-3">
            <label for="inputEmail" class="col-sm-2 col-form-label">Email</label>
            <div class="col-sm-10">
                <input type="email" class="form-control">
            </div>
        </div>
        <div class="row mb-3">
            <label for="inputPassword" class="col-sm-2 col-form-label">Password</label>
            <div class="col-sm-10">
                <input type="password" class="form-control">
            </div>
        </div>

        <div class="row mb-3">
            <label class="col-sm-2 col-form-label">Select</label>
            <div class="col-sm-10">
                <select class="form-select" aria-label="Default select example">
                    <option selected>Open this select menu</option>
                    <option value="1">One</option>
                    <option value="2">Two</option>
                    <option value="3">Three</option>
                </select>
            </div>
        </div>

    </form><!-- End General Form Elements -->
@endsection
