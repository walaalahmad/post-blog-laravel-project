<?php

use App\Models\Post;
use App\Models\User;
use App\Models\Category;
use Psy\ExecutionLoop\Listener;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Facade;
use App\Http\Controllers\PostController;
use Spatie\YamlFrontMatter\YamlFrontMatter;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\SessionsController;
use App\Http\Controllers\AdminPostController;
use App\Http\Controllers\NewsletterController;
use App\Http\Controllers\PostCommentsController;
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
// Route::post('newsletter', function () {

//     });


// Route::get('/', function () {
//     $post =Post::latest() ;

//     // for meeey way search
//     if(request('search')){
//         $post
//         ->where('title','like','%'.request('search').'%')
//         ->orWhere('body','like','%'.request('search').'%');
//     }
//     return view('posts',
//     [
//        'posts' => $post->get(),
//        'categories'=>Category::all()

//     ]);
//     // return view('posts');
// });
//oooooor
Route::get('/',[PostController::class,'index']);

// Route::get('posts/{post}', function ($id) {
//     // find the post by slug and return the view post
//     return view('post',
//     [
//        'post' =>Post::find($id),
//        'categories'=>Category::all()

//     ]
// );
// }); /////////// or
Route::get('posts/{post}',[PostController::class,'show']);
Route::post('posts/{post:id}/comments', [PostCommentsController::class, 'store']);

Route::get('register',[RegisterController::class,'create'])->middleware('guest');
Route::post('register',[RegisterController::class,'store'])->middleware('guest');
Route::get('login',[SessionsController::class,'create'])->middleware('guest');
Route::post('sessions',[SessionsController::class,'store'])->middleware('guest');

Route::post('logout',[SessionsController::class,'destroy'])->middleware('auth');

// Route::get('categories/{category:slug}', function ( Category $category) {
//     return view('posts',
//     [
//        'posts' => $category->posts,
//        'currentCategory' => $category,
//        'categories'=>Category::all()
//     ]);
//     // return view('posts');

// });
// Route::get('authors/{author:username}', function ( User $author) {
//     return view('posts',
//     [
//        //'posts' => $author->posts->load(['category','author']) // call the relation in model $with
//        'posts' => $author->posts,
//        'categories'=>Category::all()

//     ]);
//     // return view('posts');

// });

Route::post('newsletter', NewsletterController::class);



Route::post('admin/posts', [AdminPostController::class, 'store'])->middleware('isAdmin');
Route::get('admin/posts/create', [AdminPostController::class, 'create'])->middleware('isAdmin');
Route::get('admin/posts', [AdminPostController::class, 'index'])->middleware('isAdmin');
Route::get('admin/posts/{post}/edit', [AdminPostController::class, 'edit'])->middleware('isAdmin');
Route::patch('admin/posts/{post}', [AdminPostController::class, 'update'])->middleware('isAdmin');
Route::delete('admin/posts/{post}', [AdminPostController::class, 'destroy'])->middleware('isAdmin');

// Admin Section
// Route::middleware('can:admin')->group(function () {
//     Route::resource('admin/posts', AdminPostController::class)->except('show');
// });
