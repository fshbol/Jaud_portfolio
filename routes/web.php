<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SkillController;
use App\Http\Controllers\Homecontroller;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\ExperienceController;
use App\Http\Controllers\ContactController;
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

Route::get('/', [Homecontroller::class, 'index']);
Route::get('/skills', [SkillController::class, 'index'])->name('skills.index');;
Route::get('/project', [ProjectController::class, 'index']);
Route::get('/experience', [ExperienceController::class, 'index'])->middleware('Erika_Portfolio.access');
Route::get('/contact', [ContactController::class, 'index']);



