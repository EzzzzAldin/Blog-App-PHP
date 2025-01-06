@extends('layout.app')

@section('title', 'Create Post')

@section('content')
    <div class="container">
        <form action="{{ route('posts.update', $post->id) }}" method="post">
            @csrf
            @method('put')
            <div>
                <label for="title" class="form-label mt-4">Title</label>
                <input name="title" type="text" class="form-control" id="title" value="{{ $post->title }}">
            </div>
            <div>
                <label for="description" class="form-label mt-4">Description</label>
                <textarea name="description" class="form-control" id="description" rows="5">{{ $post->description }}</textarea>
            </div>
            <div>
                <label for="creator" class="form-label mt-4">Creator</label>
                <select name="post_creator" class="form-select" id="creator">
                    @foreach ($users as $user)
                        <option value="{{ $user->id }}">{{ $user->name }}</option>
                    @endforeach
                </select>
            </div>
            <button type="submit" class="btn btn-info mt-3">Update</button>
        </form>
    </div>
@endsection
