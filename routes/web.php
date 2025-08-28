
<?php

use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\UserController;

Route::get('/', [HomeController::class, 'homepage']);

Route::get('/homepage', [HomeController::class, 'homepage'])->name('home'); 

Route::get('/about', function () {
    return view('home.about');
})->name('about');

Route::get('/services', function () {
    return view('home.services');
})->name('services');   

Route::get('/blog', function () {
    return view('home.blog');
})->name('blog');


Route::get('/booking', function () {
    return view('form');
})->name('book');

Route::get('/form', function () {
    return view('form');
});

Route::get('/register', function () {
    return view('register');
});

/////login register logout routes

Route::post('/register', [UserController::class, 'register']);
Route::post('/logout', [UserController::class, 'logout']);
Route::post('/login', [UserController::class, 'login']);

//blog routes

// Route::get('/login', function () {
//     $posts = [];
//     if (Auth::check()) {
//         $posts = Auth::user()->usersCoolPosts()->latest()->get();
//     }
// return view('home.blog', [
//     'posts' => Auth::user()->usersCoolPosts()->latest()->get()
// ]);
// });

//vlogs route
Route::post('/create-post',[PostController::class,'createPost']);

// GET -> show posts
Route::get('/showposts', function () {
    $posts = [];
    if (Auth::check()) {
        $posts = Auth::user()->usersCoolPosts()->latest()->get();
    }
    return view('home.blog', ['posts' => $posts]);
});

// POST -> create new post
Route::post('/showposts', function (Request $request) {
    $request->validate([
        'title' => 'required|string|max:255',
        'body'  => 'required|string',
    ]);

    Auth::user()->usersCoolPosts()->create([
        'title' => $request->title,
        'body'  => $request->body,
    ]);

    return redirect('/showposts')->with('success', 'Post created successfully!');
});
Route::get('/edit-post/{post}',[PostController::class,'editPost']);
Route::put('/edit-post/{post}',[PostController::class,'updatePost']);
Route::delete('/delete-post/{post}',[PostController::class,'deletePost']);
Route::get('/createposts',function(){
    return view('create-post');
});

Route::get('/blog', function () {
    $posts=Post::latest()->get();
    return view('home.blogs',['posts'=>$posts]);
})->name('blog');