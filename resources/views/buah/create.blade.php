@extends('admin.parent');

@section('content')

<div class="card p-4">

    <form action="{{ route('buah.store') }}" method="post" enctype="multipart/form-data">
        @csrf
        @method('POST')
            <h1>Create buah</h1>
    
            <form action="" method="post" enctype="multipart/form-data">
    
                <div class="form-floating mb-3">
                    <input type="" class="form-control" id="floatingInput" placeholder="Ayam" name="nama">
                    <label for="floatingInput">Nama</label>
                </div>

                <div class="form-floating mb-3">
                    <input type="" class="form-control" id="floatingInput" placeholder="1000" name="harga">
                    <label for="floatingInput">harga</label>
                </div>

                <div class="form-floating mb-3">
                    <input type="" class="form-control" id="floatingInput" placeholder="ijo" name="warna">
                    <label for="floatingInput">warna</label>
                </div>
    
                <button type="submit" class="btn btn-primary">Create</button>
    
            </form>
    
        </div>
    </form>

</div>

@endsection