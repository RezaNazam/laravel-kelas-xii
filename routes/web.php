<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\{
    FilmController,
    GenreController,
};

Route::get('/', [FilmController::class, 'movieHome'])->name('home');
Route::get('/movies', [FilmController::class, 'movies'])->name('movies');
Route::get('/movies/{film}', [FilmController::class, 'show'])->name('movies.show');
Route::get('/movies/genre/{genre}', [FilmController::class, 'moviesByGenre'])->name('genre');

// Route untuk Genre - CRUD
Route::get('/genre', [GenreController::class, 'index'])->name('genre.index');            // berguna untuk menampilkan daftar genre
Route::get('/genre/create', [GenreController::class, 'create'])->name('genre.create');   // berguna untuk membuat Form untuk menambahkan genre baru
Route::post('/genre', [GenreController::class, 'store'])->name('genre.store');           // untuk menyimpan genre baru
Route::get('/genre/{genre}', [GenreController::class, 'show'])->name('genre.show');      // Menampilkan detail genre
Route::get('/genre/{genre}/edit', [GenreController::class, 'edit'])->name('genre.edit'); // Form untuk mengedit genre
Route::put('/genre/{genre}', [GenreController::class, 'update'])->name('genre.update');  // Mengupdate genre
Route::delete('/genre/{genre}', [GenreController::class, 'destroy'])->name('genre.destroy'); // Menghapus genre
Route::resource('genre', GenreController::class);