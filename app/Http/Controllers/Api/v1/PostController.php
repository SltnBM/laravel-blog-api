<?php

namespace App\Http\Controllers\Api\v1;

use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use LDAP\Result;

class PostController extends Controller
{
    // Read
    public function index() {
        $post = Post::with([
            'category' => function($query) {
                $query->select('id', 'name');
            },

            'user' => function($query){
                $query->select('id', 'name');
            },
        ])->select('id', 'title', 'category_id', 'user_id', 'created_at')->get();

        return response()->json([
            'message' => 'Data berhasil diambil',
            'data' => $post
        ], Response::HTTP_OK);
    }

    // Read (Detail)
    function show($id) {
        $post = Post::with([
            'category' => function ($query) {
                $query->select('id', 'name');
            },

            'user' => function ($query) {
                $query->select('id', 'email', 'name');
            },

            'comment' => function ($query) {
                $query->select('id', 'content', 'post_id', 'user_id', 'created_at');
            },

            'comment.user' => function ($query) {
                $query->select('id', 'name', 'email');
            }

        ])->find($id);

        if(!$post) {
            return response()->json([
                'message' => 'Data tidak ditemukan'
            ], Response::HTTP_NOT_FOUND);
        }

        return response()->json([
            'message' => 'Data berhasil diambil',
            'data' => $post
        ], Response::HTTP_OK);
    }

    // Create
    function store(Request $request){
        $request->validate([
            'title' => 'required',
            'content' => 'required',
            'category_id' => 'required|exists:categories,id',
        ]);

        $post = Post::create([
            'title' => $request->title,
            'content' => $request->content,
            'category_id' => $request->category_id,
            'user_id' => Auth::user()->id,
        ]);
        
        return response()->json([
            'message' => 'Data berhasil disimpan',
            'data' => $post
        ], Response::HTTP_OK);
    }
    
    // Update
    function update(Request $request, $id){
        $post = Post::find($id);
        if(!$post){
            return response()->json([
                'message' => 'Data tidak ditemukan',
                'data' => $post
            ], Response::HTTP_NOT_FOUND);
        }

        if($post->user_id !== Auth::user()->id) {
            return response()->json([
                'message' => 'Permission denied'
            ], Response::HTTP_UNAUTHORIZED);
        }

        $request->validate([
            'title' => 'required',
            'content' => 'required',
            'category_id' => 'required|exists:categories,id',
        ]);
        
        $post->update([
            'title' => $request->title,
            'content' => $request->content,
            'category_id' => $request->category_id,
        ]);

        return response()->json([
            'message' => 'Data berhasil diupdate',
            'data' => $post
        ], Response::HTTP_OK);
    }

    // Delete
    function destroy($id){
        $post = Post::find($id);
        if(!$post){
            return response()->json([
                'message' => 'Data tidak ditemukan',
            ], Response::HTTP_NOT_FOUND);
        }

        if($post->user_id !== Auth::user()->id) {
            return response()->json([
                'message' => 'Permission denied'
            ], Response::HTTP_UNAUTHORIZED);
        }

        $post->delete();

        return response()->json([
            'message' => 'Data berhasil dihapus'
        ], Response::HTTP_OK);
    }
}
