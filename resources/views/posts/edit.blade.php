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
                @error('title')
                    <div class="d-block fs-6 text-danger mt-2">{{ $message }}</div>
                @enderror
            </div>
            <div>
                <label for="description" class="form-label mt-4">Description</label>
                <textarea name="description" class="form-control" id="description" rows="5">{{ $post->description }}</textarea>
                @error('description')
                    <div class="d-block fs-6 text-danger mt-2">{{ $message }}</div>
                @enderror
            </div>
            <div>
                <label for="creator" class="form-label mt-4">Creator</label>
                <select name="post_creator" class="form-select" id="creator">
                    @foreach ($users as $user)
                        <option @selected($post->user_id == $user->id) value="{{ $user->id }}">{{ $user->name }}</option>
                    @endforeach
                </select>
                @error('post_creator')
                    <div class="d-block fs-6 text-danger mt-2">{{ $message }}</div>
                @enderror
            </div>
            <button type="submit" class="btn btn-info mt-3">Update</button>
        </form>
    </div>
@endsection
