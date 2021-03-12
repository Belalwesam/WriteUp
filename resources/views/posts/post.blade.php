@extends('layouts.main' , ['posts' => $posts])
@section('main-content')
    <h3 class="mb-4">{{ $singlePost->title}}</h3>
    <img src="/storage/thumbnails/{{ $singlePost->image}}" alt="" class="img-fluid">
    <p style="color:#a7c2ca;" class="lead my-3"> Written at <a href="#">{{ $singlePost->created_at->format('y-m-d') }}</a></p>
    <p style="font-weight: lighter font-size:.9rem"> {{ $singlePost->body}} </p>
@endsection