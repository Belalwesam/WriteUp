<?php

use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PostsController;
use App\Models\Posts;
use Illuminate\Support\Facades\Route;

//going to admin panel 
Route::get('/admin' , [AdminController::class , 'dashboard'])->name('dashboard');

//going to creating a new post by the admin 
Route::get('/admin/create' ,[AdminController::class , 'createPage'])->name('admin.create');

//going ot edit/delete page 
Route::get('/admin/posts' , [AdminController::class , 'posts'])->name('admin.posts');

//storing the post to the data base 
Route::post('/admin/create' , [PostsController::class , 'store'])->name('posts.store');

//for going to edit page 
Route::get('/admin/{id}/edit' , [PostsController::class , 'editPage'])->name('posts.editPage');

//for actually saving changes 
Route::post('/admin/{id}/edit' , [PostsController::class , 'saveChanges'])->name('posts.edit');

//for deleting an inivisual post
Route::delete('/admin/{id}' , [PostsController::class , 'destroy'])->name('posts.destroy');

//Home Page 
Route::get('/' , [HomeController::class , 'index'])->name('writeup.index');

//single post page 
Route::get('/post/{id}' , [PostsController::class , 'show'])->name('posts.show');
