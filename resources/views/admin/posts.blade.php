@extends('layouts.app')
@section('content')
    <div class="container my-5">
        <h1 class="text-center mb-">Here are your posts.</h1>
        <div class="row mb-3">
            <div class="col-md-6 offset-md-3">
                <div class="float-right">
                    <a href="/admin" class="mb-3">Go back</a>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-12 col-md-6 offset-md-3 my-3">
                @if (count($posts) > 0)
                        @foreach ($posts as $post)
                        <div class="card d-flex flex-row p-2 my-3">
                        <a href="#"> <img src="/storage/thumbnails/{{$post->image}}" alt="" class="img-fluid" style="width: 300px; height:190px;" ></a>
                            <div class="post-info ml-3 d-flex flex-column justify-content-between">
                                <div>
                                    <h3><a href="#">{{$post->title}}</a></h3>
                                    <span>{{$post->created_at}}</span>
                                </div>
                                <div class="actions">
                                    <a href="/admin/{{$post->id}}/edit">Edit or delete here</a>
                                </div>
                            </div>
                        </div>
                    @endforeach
                @else
                    <p class="lead text-center">There are no posts.</p>
                @endif
               
            </div>
        </div>
    </div>
@endsection
