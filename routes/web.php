<?php

use App\Http\Controllers\admin\DashboardController;
use App\Http\Controllers\admin\UserController;
use App\Http\Controllers\PostController;
use Illuminate\Foundation\Auth\User;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

    Route::prefix('post')->middleware(['auth'])->group(function () {
        Route::get('/', [PostController::class, 'index'])->name('post.index');
        Route::get("create", [PostController::class, 'create'])->name('post.create');
        Route::post("create", [PostController::class, 'store'])->name('post.store');
        Route::get("edit/{post}", [PostController::class, 'edit'])->name('post.edit');
        Route::put("edit/{post}", [PostController::class, 'update'])->name('post.update');
        Route::delete("delete/{post}", [PostController::class, 'destroy'])->name('post.delete');
    });
    Route::get('/setBlogClick', function () {
        session(['blog_clicked' => true]);
        return response()->json(['status' => 'Blog click recorded']);
    })->name('setBlogClick');

    include __DIR__.'/admin/index.php';

