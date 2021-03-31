<?php

use Illuminate\Support\Facades\Route;
use \App\Http\Controllers\TemplateController;
use \App\Http\Controllers\AdminController;
use \App\Http\Controllers\UserController;

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
    return view('anasayfa');
});


Route::get('/anasayfa',[TemplateController::class, 'index'])->name('anasayfa');
Route::get('/hakkimizda',[TemplateController::class, 'hakkimizda'])->name('hakkimizda');
Route::get('/blog',[TemplateController::class, 'blog'])->name('blog');
Route::get('/kategoriler-ihtiyaclar',[AdminController::class, 'ihtiyacindex'])->name('ihtiyaclarindex');
Route::get('/kategoriler-dersler',[AdminController::class, 'dersindex'])->name('dersindex');
Route::get('/blog',[AdminController::class, 'blogindex'])->name('blogindex');


Route::get('/iletisim',[TemplateController::class, 'iletisim'])->name('iletisim');
Route::get('/ihtiyac-ekle',[UserController::class, 'ihtiyacekle'])->name('ihtiyacekle');
Route::post('/ihtiyac-store',[UserController::class, 'ihtiyacstore'])->name('ihtiyacstore');


Route::get('/ders-ekle',[UserController::class, 'dersekle'])->name('dersekle');
Route::post('/ders-store',[UserController::class, 'dersstore'])->name('dersstore');

Route::get('/paylas',[TemplateController::class, 'paylas'])->name('paylas');
Route::get('/edin',[TemplateController::class, 'edin'])->name('edin');

Route::get('/ihtiyac-edin',[UserController::class, 'ihtiyacedin'])->name('ihtiyacedin');
Route::post('/ihtiyac-edinpost',[UserController::class, 'edinpost'])->name('edinpost');

Route::get('/ders-edin',[UserController::class, 'dersedin'])->name('dersedin');
Route::post('/ders-edinpost',[UserController::class, 'dersedinpost'])->name('dersedinpost');

Route::get('/blog/detay/{adminBlog}',[AdminController::class, 'blogshow'])->name('blogshow');


Route::group(['middleware' => ['auth','isAdmin'], 'prefix' => 'admin'],function () {
        Route::get('/panel',[UserController::class, 'ihtiyacindex'])->name('ihtiyacindex');


        Route::get('/ihtiyac-ekle',[AdminController::class, 'ihtiyacekleme'])->name('ihtiyacekleme');
        Route::post('/ihtiyac-gonder',[AdminController::class, 'ihtiyacgonder'])->name('ihtiyacgonder');

        Route::get('/ihtiyac-liste',[AdminController::class, 'ihtiyaclist'])->name('ihtiyaclist');


        Route::get('/ders-ekle',[AdminController::class, 'dersekleme'])->name('dersekleme');
        Route::post('/ders-gonder',[AdminController::class, 'dersgonder'])->name('dersgonder');

        Route::get('/ihtiyac{id}',[AdminController::class, 'ihtiyacsil'])->name('ihtiyacsil');


        Route::get('/ders{id}',[AdminController::class, 'derssil'])->name('derssil');
        Route::get('/blog-ekle',[AdminController::class,'blogekle'])->name('blogekle');
         Route::post('/blog-gonder',[AdminController::class, 'bloggonder'])->name('bloggonder');

         Route::get('/blog{id}',[AdminController::class, 'blogsil'])->name('blogsil');




    });
