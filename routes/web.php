<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\homeController;
use App\Http\Controllers\courseController;

use App\Http\Livewire\CourseStatus;

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

Route::get('/', homeController::class )->name('home');

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');


Route::get('cursos', [courseController::class, 'index'])->name('courses.index');


Route::get('cursos/{course}', [courseController::class, 'show'])->name('courses.show');

Route::post('courses/{course}/enrolled', [courseController::class, 'enrolled'])->middleware('auth')->name('courses.enrolled');


Route::get('course-status/{course}', CourseStatus::class)->name('courses.status')->middleware('auth');


Route::get('presenciales/cursos-presenciales', function(){
    return view('presenciales.cursos-presenciales');
})->name('cursos-presenciales');

Route::get('presenciales/inyeccion-electronica', function(){
    return view('presenciales.inyeccion-electronica');
})->name('inyeccion-electronica');

Route::get('presenciales/electricidad-basica', function(){
    return view('presenciales.electricidad-basica');
})->name('electricidad-basica');

Route::get('presenciales/alto-rendimiento', function(){
    return view('presenciales.alto-rendimiento');
})->name('alto-rendimiento');

Route::get('presenciales/preparacion-electronica', function(){
    return view('presenciales.preparacion-electronica');
})->name('preparacion-electronica');

Route::get('presenciales/vehiculos-electricos', function(){
    return view('presenciales.vehiculos-electricos');
})->name('vehiculos-electricos');

Route::get('presenciales/redes-multiplexadas', function(){
    return view('presenciales.redes-multiplexadas');
})->name('redes-multiplexadas');

Route::get('presenciales/osciloscopio', function(){
    return view('presenciales.osciloscopio');
})->name('osciloscopio');