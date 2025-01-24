@extends('partials.layout')
@section('content')
<div class="container">
    <h1>Edit Comment</h1>
    <form action="{{ route('comments.update', $comment) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="mb-3">
            <label for="content" class="form-label">Content</label>
            <textarea name="content" id="content" class="form-control" rows="3" required>{{ $comment->content }}</textarea>
        </div>
        <button type="submit" class="btn btn-primary">Update</button>
    </form>
</div>
@endsection