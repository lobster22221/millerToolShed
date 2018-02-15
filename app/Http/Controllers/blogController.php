<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\posts;
use App\User;
class blogController extends Controller
{
   public function index()
   {
       $posts = posts::all();
       
       return view('Blog.posts', compact('posts'));
   }
   public function create()
   {
       
     
       return view('Blog.create');
       
   }
   public function show(posts $post)
   {
       
       return view('Blog.post', compact('post'));
       
   }
   
   
   public function showUser($id)
           
   {
       $posts = posts::user($id);
       return view('Blog.posts', compact('posts'));
   }
}
