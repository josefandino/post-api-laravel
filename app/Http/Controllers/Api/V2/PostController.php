<?php

namespace App\Http\Controllers\Api\V2;

use App\Http\Resources\V2\PostResource;
use App\Http\Controllers\Controller;
use App\Http\Resources\V2\PostCollection;
use Illuminate\Http\Request;
use App\Models\Post;

class PostController extends Controller
{
   public function index()
   {
      return new PostCollection(Post::latest()->paginate() );
   }

   public function store(Request $request)
   {
   }

   public function show(Post $post)
   {
      return new PostResource($post);
   }

   public function update(Request $request, Post $post)
   {
   }

   public function destroy(Post $post)
   {
   }
}
