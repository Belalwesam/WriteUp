<?php

namespace App\Http\Controllers;

use App\Models\Posts;
use Illuminate\Http\Request;

class PostsController extends Controller
{
    public function store(Request $request) {
        //validate the inputs 
        $this->validate($request , [
            'title' => 'required',
            'body' => 'required',
        ]);
        //in case no image is provided 
        $imageNameToStore = 'noimage.png';
        //in case an image was provided 
       if ($request->hasFile('image')) {
            $imageNameToStore = time().'_'.$request->file('image')->getClientOriginalName();
            $path = $request->file('image')->storeAs('/public/thumbnails' , $imageNameToStore);
       }
       //storing informations in the data base 
       Posts::create([
           'title' => $request->title,
           'body' => $request->body,
           'image' => $imageNameToStore
       ]);
       //going to dahsboard after storing a new post 
       return redirect()->route('dashboard')->with('creationSuccess' , 'post created sccessfully');
    }
    public function editPage($id) {
        $post = Posts::find($id);
        return view('admin.edit')->with('post' , $post);
    }

    public function saveChanges(Request $request , $id) {
        $post = Posts::find($id);
        //validation 
        $this->validate($request , [
            'title' => 'required',
            'body' => 'required',
            'image' => 'image|max:1999'
        ]);
        $updatedImageName = $post->image;
        if ($request->hasFile('image')) {
            $updatedImageName = time().'_'.$request->file('image')->getClientOriginalName();
            $path = $request->file('image')->storeAs('public/thumbnails', $updatedImageName);
        }
        $post->title = $request->title;
        $post->body = $request->body;
        $post->image = $updatedImageName;
        $post->save();
        return redirect()->route('dashboard')->with('editSuccess' , 'post Edited sccessfully');
    }
    public function destroy($id) {
        $post = Posts::find($id);
        $post->delete();
        return redirect()->route('dashboard')->with('deleteSuccess' , 'post Deleted sccessfully');
    }
    public function show($id) { 
        $singlePost = Posts::find($id);
        $posts = Posts::all();
        return view('posts.post')->with('singlePost' , $singlePost)->with('posts' , $posts);
    }
}
