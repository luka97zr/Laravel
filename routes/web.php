<?php

use App\Models\Post;
use App\Models\Category;
use App\Models\User;
use Illuminate\Support\Facades\Route;
use League\CommonMark\Extension\FrontMatter\Data\LibYamlFrontMatterParser;
use League\CommonMark\Extension\FrontMatter\Data\SymfonyYamlFrontMatterParser;
use Spatie\YamlFrontMatter\YamlFrontMatter;
use Symfony\Component\Routing\Loader\YamlFileLoader;
use Symfony\Component\Translation\Dumper\YamlFileDumper;
use Symfony\Component\VarDumper\VarDumper;
use Illuminate\Support\Facades\File;


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
    return view('posts',[
         'posts' => Post::latest()->with('category','author')->get(),
         'categories'  => Category::all()
    ]);
})->name('home');

Route::get('post/{post:slug}', function (Post $post) {
    return view('post',[
        'post' => $post,
    ]);

})->where('post','[A-z_\-]+');

Route::get('categories/{category:slug}',function(Category $category){
    return view('posts',[
        'posts' => $category->posts->load(['category','author']), //Kada radimo na postojecem modelu
        'categories'  => Category::all(),
        'currentCategory' => $category
    ]);
})->name('category');

Route::get('authors/{author:username}',function(User $author){
    return view('posts',[
        'posts' => $author->posts->load(['category','author']), //Kada radimo na postojecem modelu
        'categories'  => Category::all()
    ]);
});