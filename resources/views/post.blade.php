@extends('partials.layout') 
@section('title', $post->title) 
@section('content') 
    <div class="container mx-auto"> 
        @include('partials.post-card') 
        <a href="./comments/create/{{$post->id}}" class="btn btn-primary">Leave the comment</a> 
        <h3 class="text-2xl">Comments:</h3> 
        @foreach($post->comments()->latest()->get() as $comment) 
            <div class="card bg-base-200 shadow-xl mt-3"> 
                <div class="card-body"> 
                    <p>{{ $comment->body }}</p> 
                    <p class="text-neutral-content">{{ $comment->created_at->diffForHumans() }}</p> 
                    <p class="text-neutral-content">{{ $comment->user->name }}</p> 
                </div> 
            </div> 
        @endforeach 
    </div> 
@endsection
