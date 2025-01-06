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
                        @foreach ($posts as $post)
                            <tr>
                                <td>{{ $post->id }}</td>
                                <td>{{ $post->title }}</td>
                                <td>{{ $post->posted_by }}</td>
                                <td>{{ $post->created_at->toDateString() }}</td>
                                <td>
                                    <a href="{{ route('posts.show', $post->id) }}" class="btn btn-dark">View</a>
                                    <a href="{{ route('posts.edit', $post->id) }}" type="button"
                                        class="btn btn-info">Edit</a>
                                    <form style="display: inline" action="{{ route('posts.destroy', $post->id) }}"
                                        method="post">
                                        @csrf
                                        @method('delete')
                                        <button type="submit" class="btn btn-primary">Delete</button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
            <div class="col-2"></div>
        </div>
    </div>
@endsection
