@extends('layout.app')

@section('title', 'Create Post')

@section('content')
    <div class="container">
        <form action="{{ route('posts.update', '1') }}" method="post">
            @csrf
            @method('put')
            <div>
                <label for="title" class="form-label mt-4">Title</label>
                <input name="title" type="text" class="form-control" id="title" placeholder="Enter title">
            </div>
            <div>
                <label for="description" class="form-label mt-4">Description</label>
                <textarea name="description" class="form-control" id="description" rows="5"></textarea>
            </div>
            <div>
                <label for="creator" class="form-label mt-4">Creator</label>
                <select name="post_creator" class="form-select" id="creator">
                    <option>Ezzzz Aldin</option>
                    <option>Mohamed</option>
                </select>
            </div>
            <button type="submit" class="btn btn-info mt-3">Update</button>
        </form>
    </div>
@endsection
