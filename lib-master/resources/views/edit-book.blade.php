@extends('layouts.app')

@section('content')
<div class="container mt-4">
    @if ( Session::has('success') )
        <div class="alert alert-success text-center" role="alert">
            {{ Session::get('success') }}
        </div>
    @endif
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">Edit Book {{ $book->id }}</div>
                <div class="card-body">
                    
                    <form action="{{ route('books.update', $book->id) }}" method="post">
                        @csrf

                        <div class="form-group">
                            <label for="title">Book Title</label>
                            <input name="title" id="title" class="form-control @error('title') is-invalid @enderror" type="text" value="{{ $book->title }}">
                        </div>
                        
                        <div class="form-group">
                            <label for="author">Book Author</label>
                            <input name="author" id="author" class="form-control @error('author') is-invalid @enderror" type="text" value="{{ $book->author }}">
                        </div>
                        
                        <div class="form-group">
                            <label for="description">Book Description</label>
                            <textarea name="description" id="description" class="form-control @error('description') is-invalid @enderror" cols="30" rows="5">{{ $book->description }}</textarea>
                        </div>
                        
                        <div class="form-group">
                            <label for="category">Book Category</label>
                            <select name="category" id="category" class="form-control @error('category') is-invalid @enderror">
                                <option value="sports" {{ $book->category == 'sports' ? 'selected' : '' }}>Sports</option>
                                <option value="history" {{ $book->category == 'history' ? 'selected' : '' }}>History</option>
                                <option value="drama" {{ $book->category == 'drama' ? 'selected' : '' }}>Darma</option>
                            </select>
                        </div>
                        
                        <div class="form-group mb-0">
                            <button type="submit" class="btn btn-primary">Save</button>
                        </div>

                    </form>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
