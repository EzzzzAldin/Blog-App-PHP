@extends('layout.app')

@section('title', 'Show Post')

@section('content')
    <div class="container">
        <div class="card text-white bg-dark mb-3">
            <div class="card-header">Post Info</div>
            <div class="card-body">
                <h4 class="card-title">Title: {{ $post->title }}</h4>
                <p class="card-text">Description: {{ $post->description }}.</p>
            </div>
        </div>
        <div class="card text-white bg-primary mb-3">
            <div class="card-header">Name: Ezz Aldin</div>
            <div class="card-body">
                <h4 class="card-title">Email: ezz@gmail.com</h4>
                <p class="card-text">Created At: {{ $post->created_at }}</p>
            </div>
        </div>
    </div>
@endsection
