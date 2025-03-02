<?php

use App\Http\Controllers\homeController;
use App\Models\Post;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\postController;


/* Route::get('/posts', function () {
    return 'Aqui se mostraran todos los post';
}); */

/* Route::post/get/put/delete la que queramos */

/* Route::get('/post/{post}', function ($post) {
    return "Aqui se mostraran todos los post {$post}";
});
 */

Route::get('/', [homeController::class, 'index']);

Route::get('/post', [postController::class, 'create']);
Route::get('/post/{post}', [postController::class, 'show']);

Route::get('prueba', function () {
    
    $posts = new Post;

    /* $posts->title = "Titulo de prueba 1";
    $posts->content = "Contenido de prueba 1";
    $posts->categoria = "Categoria de prueba 1";


    $posts->title = "Titulo de prueba 2";
    $posts->content = "Contenido de prueba 2";
    $posts->categoria = "Categoria de prueba 2"; */

    $posts = Post::all();


    $post = Post::find('title');
    return $posts;
});
