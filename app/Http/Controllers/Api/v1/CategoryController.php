<?php

namespace App\Http\Controllers\Api\v1;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Response;
use Illuminate\Http\Request;
use LDAP\Result;

class CategoryController extends Controller
{
    // Read
    public function index(){
        $category = Category::select('id', 'name')->get();

        return response()->json([
            'message' => 'Read succesfully',
            'data' => $category
        ], Response::HTTP_OK);
    }
    
    // Create
    public function store(Request $request){
        $request->validate([
            'name' => 'required|unique:categories|max:255'
        ]);

        $category = Category::create([
            'name' => $request->name
        ]);

        return response()->json([
            'message' => 'Created successfully',
            'data' => $category
        ], Response::HTTP_CREATED);
    }

    // Update
    public function update(Request $request, $id){
        $request->validate([
            'name' => 'required|unique:categories,name,'.$id.'|max:255'
        ]);

        $category = Category::find($id);

        if (!$category) {
            return response()->json([
                'message' => 'Data Not Found'
            ], Response::HTTP_NOT_FOUND);
        }

        $category->name = $request->name;
        $category->save();

        return response()->json([
            'message' => 'Update successfully',
            'data' => $category
        ], Response::HTTP_OK);
    }
    
    // Delete
    public function destroy($id){
        $category = Category::find($id);
        if (!$category) {
            return response()->json([
                'message' => 'Data Not Found'
            ], Response::HTTP_NOT_FOUND);
        }

        $category->delete();

        return response()->json([
            'message' => 'Delete successfully'
        ], Response::HTTP_OK);
    }
}
