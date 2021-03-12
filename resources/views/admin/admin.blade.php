@extends('layouts.app')
@section('content')
    <div class="container my-5">
        <h1 class="text-center mb-4">
            Welcome admin
        </h1>
        @if (session('creationSuccess'))
        <div class="row my-1">
            <div class="col-12 col-md-4 offset-md-4">
               <div class="alert alert-success">
                    {{ session('creationSuccess') }}
               </div>
            </div>
        </div>
        @endif
        @if (session('editSuccess'))
        <div class="row my-1">
            <div class="col-12 col-md-4 offset-md-4">
               <div class="alert alert-success">
                    {{ session('editSuccess') }}
               </div>
            </div>
        </div>
        @endif
        @if (session('deleteSuccess'))
        <div class="row my-1">
            <div class="col-12 col-md-4 offset-md-4">
               <div class="alert alert-danger">
                    {{ session('deleteSuccess') }}
               </div>
            </div>
        </div>
        @endif
        <div class="row">
            <div class="col-12 col-md-4 offset-md-4">
                <div class="card p-3">
                    <a href="{{ route('admin.create') }}">Create a new blog post</a>
                </div>
                <div class="card p-3 my-2">
                    <a href="{{ route('admin.posts') }}">Edit or delete blog posts</a>
                </div>
            </div>
        </div>
    </div>
@endsection