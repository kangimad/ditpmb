<?php

use App\Http\Controllers\KategoriController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;
use App\Http\Controllers\SantriController;
use App\Http\Controllers\PostinganController;
use App\Models\User;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Route::get('/', function () {
//     return view('partials.layout', ['title' => 'DITPMB', 'subtitle' => 'Home']);
// });

// Route::resources([
//     'pengampu' => PengampuController::class
// ]);

Route::get('/', [PageController::class, 'home']);
Route::get('/home', [PageController::class, 'home']);
Route::get('/about', [PageController::class, 'about']);

Route::get('/santri', [SantriController::class, 'index']);
Route::get('/santri/create', [SantriController::class, 'create']);
Route::post('/santri', [SantriController::class, 'save']);
Route::get('/santri/{santri}/detail', [SantriController::class, 'show']);
Route::get('/santri/{santri}/edit', [SantriController::class, 'edit']);
Route::get('/santri/{santri}/delete', [SantriController::class, 'delete']);
Route::get('/santri/{santri}/save', [SantriController::class, 'save']);

Route::get('/postingan', [PostinganController::class, 'index']);
Route::get('/postingan/create', [PostinganController::class, 'create']);
Route::post('/postingan', [PostinganController::class, 'save']);
Route::get('/postingan/{postingan:slug}', [PostinganController::class, 'show']);
// Route::get('/postingan/{id}/edit', [PostinganController::class, 'edit']);
// Route::get('/postingan/{id}/delete', [PostinganController::class, 'delete']);

Route::get('/kategori', [KategoriController::class, 'index']);
Route::get('/kategori/{kategori:nama}', [KategoriController::class, 'show']);

Route::get('/author', function() {
    return view('frontend.pages.allauthor', [
        'title' => 'DITPMB',
        'active' => 'Author',
        'subtitle' => 'Halaman Author',
        'user' => User::all()
    ]);
});

Route::get('/author/{author:name}', function(User $author) {
    return view('frontend.pages.author', [
        'title' => 'DITPMB',
        'active' => 'Author',
        'subtitle' => 'Halaman Author',
        'author' => $author->name,
        'postingan' => $author->postingan->load(['kategori', 'author'])
    ]);
});



