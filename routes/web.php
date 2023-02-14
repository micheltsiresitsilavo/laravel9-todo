<?php
use App\Http\Controllers\HomeController;
use App\Http\Controllers\NoteController;
use App\Http\Controllers\PostController;
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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', [NoteController::class, 'index'])->name('notes.home');
Route::get('/notes/create', [NoteController::class, 'create'])->name('notes.create');
Route::post('/notes/create', [NoteController::class, 'store'])->name('notes.store');
Route::get('/notes/{note}', [NoteController::class, 'show'])->name('notes.show');
Route::get('/notes/edit/{note}', [NoteController::class, 'edit'])->name('notes.edit');
Route::put('/notes/update/{note}', [NoteController::class, 'update'])->name('notes.update');
Route::delete('/notes/delete/{note}', [NoteController::class, 'destroy'])->name('notes.destroy');