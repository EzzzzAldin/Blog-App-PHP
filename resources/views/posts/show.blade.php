@extends('layout.app')

@section('title', 'Show Post')

@section('content')
    <div class="container">
        <div class="card text-white bg-dark mb-3">
            <div class="card-header">Post Info</div>
            <div class="card-body">
                <h4 class="card-title">Title: PHP</h4>
                <p class="card-text">Description: Some quick example text to build on the card title and make up the bulk of
                    the card's
                    content.</p>
            </div>
        </div>
        <div class="card text-white bg-primary mb-3">
            <div class="card-header">Name: Ezz Aldin</div>
            <div class="card-body">
                <h4 class="card-title">Email: ezz@gmail.com</h4>
                <p class="card-text">Created At: Monday 25th of December 1975 02:15:16 PM</p>
            </div>
        </div>
    </div>
@endsection
