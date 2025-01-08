<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\User;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
    {
        // Select All Posts From DB
        $posts = Post::all();

        return view("posts.index", compact("posts"));
    }

    public function show(Post $post)
    {
        return view("posts.show", compact("post"));
    }

    public function create()
    {
        // Get All Users
        $users = User::all();

        return view("posts.create", compact("users"));
    }

    public function store()
    {
        // Validate
        request()->validate([
            "title" => ["required", "min:3"],
            "description" => ["required", "min:5"],
            "post_creator" => ["required", "exists:users,id"]
        ]);

        // Get Data
        $data = request()->all();

        $title = request()->title;
        $description = request()->description;
        $postCreator = request()->post_creator;

        // Store On DB
        Post::create([
            "title" => $title,
            "description" => $description,
            "user_id" => $postCreator
        ]);


        return to_route("posts.index")->with("success", "Added Post Successfully !");
    }

    public function edit(Post $post)
    {
        // Get All Users
        $users = User::all();

        return view("posts.edit", compact("post", "users"));
    }

    public function update(Post $post)
    {
        // Validate
        request()->validate([
            "title" => ["required", "min:3"],
            "description" => ["required", "min:5"],
            "post_creator" => ["required", "exists:users,id"]
        ]);

        // Get Data
        $title = request()->title;
        $description = request()->description;
        $postCreator = request()->post_creator;

        // Update Post In DB
        $post->update([
            "title" => $title,
            "description" => $description,
            "user_id" => $postCreator
        ]);


        return to_route("posts.show", $post)->with("success", "Edit Post Successfully !");
    }

    public function destroy(Post $post)
    {
        $post->delete();

        return to_route("posts.index")->with("success", "Deleted Post Successfully !");
    }
}
