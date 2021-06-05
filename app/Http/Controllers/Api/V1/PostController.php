<?php

namespace App\Http\Controllers\Api\V1;

use App\Http\Resources\V1\PostResource;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Post;

class PostController extends Controller
{
   public function index()
   {
      return PostResource::collection(Post::latest()->paginate() );
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
      //
   }

   public function destroy(Post $post)
   {
      $post->delete();

      return response()->json([
         'message' => 'El Recurso ha sido eliminado correctamente'
      ], 204);

   }
}
