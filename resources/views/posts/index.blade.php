@extends('layout.app')

@section('title', 'Home')

@section('content')
    <div class="text-center">
        <a href="{{ route('posts.create') }}" class="btn btn-success btn-lg">Create Blog</a>
    </div>
    <div class="container mt-4">
        @include('shared.success-message')
        <div class="row">
            <div class="col-2"></div>
            <div class="col-8">
                <table class="table table-striped mt-3">
                    <thead class="table-dark">
                        <tr>
                            <th>#</th>
                            <th>Title</th>
                            <th>Posted By</th>
                            <th>Created At</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>5464</td>
                            <td>ezz</td>
                            <td>ezz@gmail.com</td>
                            <td>20/12/2024</td>
                            <td>
                                <a href="{{ route('posts.show', '1') }}" class="btn btn-dark">View</a>
                                <a href="{{ route('posts.edit', '1') }}" type="button" class="btn btn-info">Edit</a>
                                <form style="display: inline" action="{{ route('posts.destroy', '1') }}" method="post">
                                    @csrf
                                    @method('delete')
                                    <button type="submit" class="btn btn-primary">Delete</button>
                                </form>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <div class="col-2"></div>
        </div>
    </div>
@endsection
