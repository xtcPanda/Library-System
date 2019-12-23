@extends('layouts.app')

@section('content')

<div class="jumbotron">
    <h1 class="display-4">Welcome to</h1>
    <p class="lead">The Library System!</p>
    <hr class="my-4">
    <p>everyday from 9:00 am to 3:00 pm.</p>
</div>

<div class="container mb-4">
    <div class="row justify-content-center">
        <div class="col-md-8">
            
            <h1 class="display-4">Description</h1>
            <p class="lead">
            This is a Library System UI was made in HTML, CSS and js. it should has the following features Add, modify and delete book details Search feature for finding book availability in library stock. The books are categorized The system should store the data for students before borrow a book Add students records upon issue of a book. Record issue date, return date, and fine(penalty). Payment system/feature allows the librarian to calculate payment details and print bill.
            </p>
            <hr>
            <h1 class="display-4">About Us</h1>

            <div class="row">
                <div class="col-md-6">
                    <div class="card">
                        <img src="https://via.placeholder.com/450" class="card-img-top" alt="placeholder">
                        <div class="card-body">
                            <h5 class="card-title">Moaaz Akram Alhajj</h5>
                            <p class="card-text">20182328</p>
                            <p class="card-text">Game Developer/Designer</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="card">
                        <img src="https://via.placeholder.com/450" class="card-img-top" alt="placeholder">
                        <div class="card-body">
                            <h5 class="card-title">Moaaz Akram Alhajj</h5>
                            <p class="card-text">20182328</p>
                            <p class="card-text">Game Developer/Designer</p>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>
@endsection