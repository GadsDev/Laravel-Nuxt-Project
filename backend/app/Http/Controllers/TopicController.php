<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use App\Topic;
use App\Http\Resources\Topic as TopicResource;

class TopicController extends Controller
{
    public function store(Request $request){
        $topic = new Topic;
        $topic->title = $request->title;
        //Get User by JWT
        $topic->user()->associate($request->user());

        $post = new Post;
        $post->body = $request->body;
        //Get User by JWT
        $post->user()->associate($request->user());

        $topic->save();
        $topic->posts()->save($post);

        return new TopicResource($topic);
    }
}
