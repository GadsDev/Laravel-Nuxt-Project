<?php

namespace App\Http\Controllers;

use App\Post;
use App\Topic;
use App\Http\Resources\Topic as TopicResource;
use App\Http\Requests\TopicCreateRequest;

class TopicController extends Controller
{
    public function store(TopicCreateRequest $request){
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
