<?php

namespace App\Http\Controllers;

use App\Models\Posts;
use Illuminate\Http\Request;

class HomeController extends Controller
{
   public function index () {
       $posts = Posts::all();
       $paginatedPosts = Posts::paginate(5);
       return view('home.index')->with('posts' , $posts)->with('paginatedPosts' , $paginatedPosts);
   }
}
