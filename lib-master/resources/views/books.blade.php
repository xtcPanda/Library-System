@extends('layouts.app')

@section('content')
<div class="container mb-4">
    <h1 class="display-4 my-3">List of Books</h1>
    <form action="{{ route('books.search') }}">
        <div class="form-row">
            <div class="col">
                <input name="search" class="form-control" placeholder="what are you looking for?" type="text" value="{{ isset($search) ? $search : '' }}">
            </div>
            <div class="col-auto">
                <button class="btn btn-primary">Search</button>
            </div>
        </div>
    </form>
    <hr>

    <div class="row">
    
        <!-- LOOP OF BOOKS -->

        @forelse ( $books as $book )

            <div class="col-md-4">
                <div class="card mb-3">
                    <img src="https://via.placeholder.com/350" class="card-img-top" alt="placeholder">
                    <div class="card-body">
                        <h5 class="card-title">{{ $book->title }}</h5>
                        <p class="card-text">{{ $book->description }}</p>
                        <a href="#" class="btn btn-primary">Borrow</a>
                    </div>
                </div>
            </div>

        @empty

        <div class="col-md-12">
            <div class="alert alert-primary" role="alert">
                No Matched Results were found!
            </div>
        </div>

        @endforelse
        
    </div>
</div>
@endsection