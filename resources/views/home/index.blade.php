@extends('layouts.main' , ['posts' => $posts])
@section('main-content')
@if(str_contains(url()->full() , '?page=1'))
<!--Start of carousel -->
<div
id="carouselExampleCaptions"
class="carousel carousel-fade slide"
data-ride="carousel"
>
<div class="carousel-inner">
  <div class="carousel-item active" style="position: relative">
    <a href="{/post/{{$posts[0]->id}}}">
      <img
        src="{{ URL::to('/')}}/images/{{$posts[0]->image}}"
        class="d-block w-100"
        alt="..."
        id="vvv"
      />
      <div class="carousel-caption d-none d-md-block">
        <h5
          style="
            font-weight: 400;
            font-size: 19px;
            line-height: 1.5;
          "
        >
          {{$posts[0]->title}}
        </h5>
        <p>{{ $posts[0]->created_at->format('Y-m-d')}}</p>
      </div>
    </a>
  </div>
  <div class="carousel-item">
    <a href="/post/{{$posts[1]->id}}">
      <img
        src="/storage/thumbnails/{{$posts[1]->image}}"
        class="d-block w-100"
        alt="..."
      />
      <div class="carousel-caption d-none d-md-block">
        <h5
          style="
            font-weight: 400;
            font-size: 19px;
            line-height: 1.5;
          "
        >
        {{$posts[1]->title}}
        </h5>
        <p>{{ $posts[1]->created_at->format('Y-m-d')}}</p>
      </div>
    </a>
  </div>
</div>
<a
  class="carousel-control-prev"
  href="#carouselExampleCaptions"
  role="button"
  data-slide="prev"
>
  <span
    class="carousel-control-prev-icon"
    aria-hidden="true"
  ></span>
  <span class="sr-only">Previous</span>
</a>
<a
  class="carousel-control-next"
  href="#carouselExampleCaptions"
  role="button"
  data-slide="next"
>
  <span
    class="carousel-control-next-icon"
    aria-hidden="true"
  ></span>
  <span class="sr-only">Next</span>
</a>
</div>
<!--End of carousel-->
@endif
     <!--Start of the main posts -->
     <div class="hero-posts mt-5">
       @foreach ($paginatedPosts as $singlePost)
       <div class="hero-single-post mb-4">
        <img src="./storage/thumbnails/{{$singlePost->image}}" alt="" class="img-fluid rounded" />
        <div class="single-post-text">
          <a href="/post/{{$singlePost->id}}"
            ><h4>
             {{$singlePost->title}}
            </h4></a
          >
          <span>{{ $singlePost->created_at->format('Y-m-d')}}</span>
          <a href="/post/{{$singlePost->id}}"
            ><p>
              Ut wisi enim ad minim veniam, quis nostrud exerci tation
              ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo
              consequat. Duis autem vel eum iriure dolor in hendrerit in
              vulputate velit esse molestie consequat, vel illum dolore eu
              feugiat nulla facilisis at vero eros et accumsan et iusto
              odio dignissim qui blandit praesent luptatum zzril delenit
              augue duis. Ut wisi enim ad minim veniam, quis nostrud
              exerci tation ullamcorper suscipit lobortis nisl ut aliquip
              ex ea commodo consequat.
            </p></a
          >
        </div>
      </div>
       @endforeach
      </div>
      {{$paginatedPosts->links()}}
      <!--End of the main posts -->
@endsection
<style>
    .carousel-item::before {
        content : '';
        background: rgba(0, 0, 0, 0.5);
        z-index: 1;
        position: absolute;
        width: 100%;
        height: 100%;
        top: 0;
        left: 0;
    }
</style>