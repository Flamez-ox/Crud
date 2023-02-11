<?php

use App\Http\Controllers\PostController;
use App\Models\Post;
use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');
});

// Route::get('/posts', function() {

//     return view('post');
// });


//ASSIGNMENT

Route::post('/create', [PostController::class, 'store'])->name('store');

Route::get('read_all', [PostController::class, 'index'])->name('read_all');

Route::get('/edit/{id}', [PostController::class, 'edit'])->name('edit');

Route::post('/update/{id}', [PostController::class, 'update'])->name('update');

Route::get('/delete/{id}',[PostController::class, 'delete'])->name('delete');

Route::get('/trash/{id}',[PostController::class, 'trash'])->name('trash');

Route::get('/restore/{id}',[PostController::class, 'restore'])->name('restore');

// Route::get('/read_all', function() {
//     $posts = Post::all();
//     return view("post", compact('posts'));
// });


// Route::get('/read_one/{id}', function($id) {
//     $post = Post::FindorFail($id);

//     return view('read_one', compact("post"));

// })->name("adams");


// Route::get('/update/{id1}', function($id1) {
//     $post_id = Post::findOrFail($id1);

//     $post_id->update([
//              'post_tittle' => 'Pingpong',
//             'post_content' => 'Pingpong is better',
//             'post_category' => 'Pingpong news',
//             'post_tags' => '4',
//          ]);

//          return "<h1>successfully</h1>";

// });