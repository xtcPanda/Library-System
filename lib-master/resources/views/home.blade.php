@extends('layouts.app')

@section('content')

@if ( auth()->user()->is_admin )

<div class="container mt-4">
    @if ( Session::has('success') )
        <div class="alert alert-success text-center" role="alert">
            {{ Session::get('success') }}
        </div>
    @endif
    <div class="row justify-content-center">
        <div class="col-md-4">
            <div class="card">
                <div class="card-header">Add to Books</div>
                <div class="card-body">
                    
                    <form action="{{ route('books.store') }}" method="post">
                        @csrf

                        <div class="form-group">
                            <label for="title">Book Title</label>
                            <input name="title" id="title" class="form-control @error('title') is-invalid @enderror" type="text">
                        </div>
                        
                        <div class="form-group">
                            <label for="author">Book Author</label>
                            <input name="author" id="author" class="form-control @error('author') is-invalid @enderror" type="text">
                        </div>
                        
                        <div class="form-group">
                            <label for="description">Book Description</label>
                            <textarea name="description" id="description" class="form-control @error('description') is-invalid @enderror" cols="30" rows="5"></textarea>
                        </div>
                        
                        <div class="form-group">
                            <label for="category">Book Category</label>
                            <select name="category" id="category" class="form-control @error('category') is-invalid @enderror">
                                <option value="sports">Sports</option>
                                <option value="history">History</option>
                                <option value="drama">Darma</option>
                            </select>
                        </div>
                        
                        <div class="form-group mb-0">
                            <button type="submit" class="btn btn-primary">Save</button>
                        </div>

                    </form>

                </div>
            </div>
        </div>
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">List of Books</div>

                <div class="card-body p-0">

                    <table class="table mb-0">
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Title</th>
                                <th scope="col">Author</th>
                                <th scope="col">Category</th>
                                <th scope="col">Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($books as $book)
                                <tr>
                                    <th scope="row">{{ $book->id }}</th>
                                    <td>{{ $book->title }}</td>
                                    <td>{{ $book->author }}</td>
                                    <td>{{ $book->category }}</td>
                                    <td>
                                        <a class="badge badge-primary" href="{{ route('books.edit', $book->id) }}">Edit</a>
                                        <a class="badge badge-danger" href="{{ route('books.destroy', $book->id) }}">Delete</a>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                        
                </div>
            </div>
        </div>
    </div>
</div>

@endif

@endsection
