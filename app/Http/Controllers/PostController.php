<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class PostController extends Controller
{
 public function index()
 {
     $post = Post::where('is_published', 1)->first();
     dump($post->title);
     dd('end');
 }

}
