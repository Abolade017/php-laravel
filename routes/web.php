<?php

use App\Http\Controllers\NewsletterController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\SessionController;
use App\Models\Category;
use App\Models\Post;
use App\Models\User;
use App\services\Newsletter;
use Illuminate\Log\Logger;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Route;
use PhpParser\Node\Stmt\TryCatch;
use Spatie\YamlFrontMatter\YamlFrontMatter;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', [PostController::class, 'index'])->name('home');
Route::get('posts/{post:slug}', [PostController::class, 'show']);
Route::post('newsletter', NewsletterController::class);
Route::post('posts/{post:slug}/comments', [PostCommentsController::class, 'store']);
Route::get('reg', [RegisterController::class, 'create'])->middleware('guest');
Route::post('reg', [RegisterController::class, 'store'])->middleware('guest');
Route::post('logout', [SessionController::class, 'destroy'])->middleware('auth');
Route::get('log-in', [SessionController::class, 'create'])->middleware('guest');
Route::post('sessions', [SessionController::class, 'store'])->middleware('guest');
Route::get('authors/{author:username}', function (User $author) {
    return view('posts.index', [

        'posts' => $author->posts,

    ]);
});
Route::get('admin/posts/create',[PostController::class, 'create'])->middleware('admin');
// Route::post('admin/posts',[PostController::class, 'store'])->middleware('admin');
Route::post('admin/posts',[PostController::class, 'store'])->middleware('admin');
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__ . '/auth.php';
