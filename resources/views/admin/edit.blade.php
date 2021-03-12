@extends('layouts.app')
@section('content')
    <div class="container my-5">
        <h1 class="text-center mb-3">Edit Post</h1>
        <div class="row">
            <div class="col-12 col-md-6 offset-md-3 mb-3 d-flex justify-content-between align-items-center">
                <form action="{{ route('posts.destroy'  , $post->id  )}}" method="post">
                    @csrf
                    @method('DELETE')
                    <button class="btn btn-lg btn-danger">Delete</button>
                </form>
                <div class="float-right">
                    <a href="/admin">Go back</a>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-12 col-md-6 offset-md-3">
                <form action="{{ route('posts.edit' , $post->id) }}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <input type="text" name="title" class="form-control @error('title')
                        is-invalid
                    @enderror" value="{{ $post->title }}">
                    </div>
                    <div class="form-group">
                        <textarea name="body" id="" cols="30" rows="10" class="form-control @error('title')
                        is-invalid
                    @enderror">{{ $post->body }}</textarea>
                    </div>
                    <div class="form-group">
                       <label for="">New Thumbnail</label>
                        <input type="file" name="image" class="form-control">
                    </div>
                    <div class="form-group">
                        <input type="submit" value="Save changes" class="btn btn-lg btn-primary btn-block">
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection