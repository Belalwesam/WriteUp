<?php

namespace App\Http\Controllers\Admin;

use App\Models\Posts;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AdminController extends Controller
{
    public function dashboard() {
        return view('admin.admin');
    }

    public function createPage() {
        return view('admin.create');
    }
    
    public function posts() {
        $posts = Posts::all();
        return view('admin.posts')->with('posts' , $posts);
    }
}
