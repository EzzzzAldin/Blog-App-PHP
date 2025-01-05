<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
    {
        return view("posts.index");
    }

    public function show($postId)
    {
        return view("posts.show");
    }

    public function create()
    {
        return view("posts.create");
    }

    public function store()
    {
        // Get Data
        $data = request()->all();

        $title = request()->title;
        $description = request()->description;
        $postCreator = request()->post_creator;

        // Store On DB



        return to_route("posts.index")->with("success", "Added Post Successfully !");
    }

    public function edit($postId)
    {
        return view("posts.edit");
    }

    public function update($postId)
    {
        // Get Data
        $title = request()->title;
        $description = request()->description;
        $postCreator = request()->post_creator;

        // Update Post In DB



        return to_route("posts.show", $postId)->with("success", "Edit Post Successfully !");
    }

    public function destroy($postId)
    {
        return to_route("posts.index")->with("success", "Deleted Post Successfully !");
    }
}
