<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\v1\AuthController;
use App\Http\Controllers\Api\v1\PostController;
use App\Http\Controllers\Api\v1\CommentController;
use App\Http\Controllers\Api\v1\CategoryController;


Route::group(['prefix' => 'v1'], function() {
    Route::post('/login', [AuthController::class, 'login']);
    Route::post('/register', [AuthController::class, 'register']);

    Route::middleware("auth:sanctum")->group(function () {

        Route::post("/logout", [AuthController::class, "logout"]);

        Route::middleware("role:admin")->group(function () {
            Route::post('/category', [CategoryController::class, 'store']);
            Route::post('/category/{id}', [CategoryController::class, 'update']);
            Route::delete('/category/{id}', [CategoryController::class, 'destroy']);
        });

        Route::get('/category', [CategoryController::class, 'index']);

        Route::get("/post", [PostController::class, "index"]);
        Route::post("/post", [PostController::class, "store"]);
        Route::post("/post/{id}", [PostController::class, "update"]);
        Route::get("/post/{id}", [PostController::class, "show"]);
        Route::delete("/post/{id}", [PostController::class, "destroy"]);

        Route::post("/comment", [CommentController::class, 'addCommentToPost']);
        Route::post("/comment/{id}", [CommentController::class, 'update']);
        Route::delete("/comment/{id}", [CommentController::class, 'destroy']);
    });
});
