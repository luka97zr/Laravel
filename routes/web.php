<?php

use App\Models\Post;
use Illuminate\Support\Facades\Route;
use League\CommonMark\Extension\FrontMatter\Data\LibYamlFrontMatterParser;
use League\CommonMark\Extension\FrontMatter\Data\SymfonyYamlFrontMatterParser;
use Symfony\Component\Routing\Loader\YamlFileLoader;
use Symfony\Component\Translation\Dumper\YamlFileDumper;
use Symfony\Component\VarDumper\VarDumper;

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
    // return view('posts',[
    //     'posts' => Post::all()
    // ]);
});

Route::get('post/{post}', function ($slug) {

    $post = Post::find($slug);

    return view('post',[
        'post' => $post
    ]);

})->where('post','[A-z_\-]+');
