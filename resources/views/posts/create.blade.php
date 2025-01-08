@extends('layout.app')

@section('title', 'Create Post')

@section('content')
    <div class="container">
        <form action="{{ route('posts.store') }}" method="post">
            @csrf
            @method('post')
            <div>
                <label for="title" class="form-label mt-4">Title</label>
                <input name="title" type="text" class="form-control" id="title" value="{{ old('title') }}"
                    placeholder="Enter title">
                @error('title')
                    <div class="d-block fs-6 text-danger mt-2">{{ $message }}</div>
                @enderror
            </div>
            <div>
                <label for="description" class="form-label mt-4">Description</label>
                <textarea name="description" class="form-control" id="description" rows="5">{{ old('description') }}</textarea>
                @error('description')
                    <div class="d-block fs-6 text-danger mt-2">{{ $message }}</div>
                @enderror
            </div>
            <div>
                <label for="creator" class="form-label mt-4">Creator</label>
                <select name="post_creator" class="form-select" id="creator">
                    @foreach ($users as $user)
                        <option value="{{ $user->id }}">{{ $user->name }}</option>
                    @endforeach
                </select>
                @error('post_creator')
                    <div class="d-block fs-6 text-danger mt-2">{{ $message }}</div>
                @enderror
            </div>
            <button type="submit" class="btn btn-dark mt-3">Submit</button>
        </form>
    </div>
@endsection
