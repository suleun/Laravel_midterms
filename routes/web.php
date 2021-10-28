<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\CarsController;

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
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

Route::get('/car/index', [CarsController::class, "index"])->name('car.index');


Route::post('/car/store', [CarsController::class,"store"])->middleware('auth')->name('car.store');
Route::get('/car', [CarsController::class,"create"])->middleware('auth')->name('car.create');


Route::get('/car/show/{id}', [CarsController::class, "show"])->name('car.show');

Route::get('/car/edit/{id}', [CarsController::class,"edit"])->middleware('auth')->name('car.edit');

Route::patch('/car/update/{id}', [CarsController::class,"update"])->middleware('auth')->name('car.update');


Route::delete('/car/destroy/{id}', [CarsController::class,"destroy"])->middleware('auth')->name('car.destroy');




require __DIR__.'/auth.php';
