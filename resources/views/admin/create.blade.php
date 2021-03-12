@extends('layouts.app')
@section('content')
    <div class="container my-5">
        <h1 class="text-center mb-3">
            Create a new blog post 
        </h1>
        <div class="row">
            <div class="col-12 col-md-6 offset-md-3">
                <div class="mb-5">
                    <span class="float-right"><a href="/admin">Go Back</a></span>
                </div>
                <form action="{{ route('posts.store') }}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <input type="text" name="title" placeholder="Title of the post" class="form-control @error('title')
                        is-invalid
                    @enderror">
                    </div>
                    <div class="form-group">
                        <textarea name="body" id="" cols="30" rows="10" class="form-control @error('body')
                        is-invalid
                    @enderror" placeholder="Body the post "></textarea>
                    </div>
                    <div class="form-group">
                        <label for="">Image for the thumbnail</label>
                        <input type="file" name="image" class="form-control">
                    </div>
                    <div class="form-group">
                        <input type="submit" value="Create" class="btn btn-lg btn-primary btn-block">
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection