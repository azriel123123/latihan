@extends('admin.parent')

@section('content')
    <div class="card">
        <h1>Category Index</h1>

        <hr>

        <div class="container d-flex justify-content-end">
            <a href="{{ route('Category.create') }}" class="btn btn-success">
                Create Category
            </a>
        </div>

        {{-- alert success --}}
        @if (session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif

        <table class="table">
            <th>
                <tr>
                    <td>No.</td>
                    <td>Name</td>
                    <td>Action</td>
                </tr>
            </th>
            <tbody>
                @foreach ($category as $row)
                <tr>
                    <td>{{ $loop -> iteration}}</td>
                    <td>{{ $row -> name }}</td>
                    <td>
                        <a href="{{ route('Category.show', $row->id) }}" class="btn btn-info">Show Category</a>
                        <form action="{{ route('Category.destroy', $row->id) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">
                                Delete
                            </button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>

    </div>
@endsection