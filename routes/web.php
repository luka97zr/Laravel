<?php

use App\Http\Controllers\PostController;
use App\Http\Controllers\RegisterController;
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

Route::get('/', [PostController::class, 'index'])->name('home');

Route::get('post/{post:slug}', [PostController::class, 'show']);

// Route::get('categories/{category:slug}',function(Category $category){
//     return view('posts',[
//         'posts' => $category->posts->load(['category','author']), //Kada radimo na postojecem modelu
//         'categories'  => Category::all(),
//         'currentCategory' => $category
//     ]);
// })->name('category');

Route::get('register',[RegisterController::class, 'create']);
Route::post('register',[RegisterController::class, 'store']);

