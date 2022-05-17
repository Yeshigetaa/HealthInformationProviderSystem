<?php
use App\Models\Disease;
use Illuminate\Support\Facades\Route;
use App\Http\controllers\DiseaseController;
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
Route::get('/Disease/register',[DiseaseController::class,'register'])->name('Disease/register');
Route::post('/Disease/register',[DiseaseController::class,'store']);
Route::get('/Disease/list', [DiseaseController::class, 'get_all'])->name('Disease/list');
Route::get('/Disease/edit/{id}', [DiseaseController::class, 'edit']);
Route::post('/Disease/update',[DiseaseController::class,'update'])->name('Disease/update');
Route::get('/Disease/delete/{id}', [DiseaseController::class, 'delete']);
Route::get('/Disease/search/{id}', [DiseaseController::class, 'search'])->name('Disease/search');

Route::get('/HealthExpert/register',[HealthExpertController::class,'register'])->name('HealthExperte/register');
Route::post('/HealthExpert/register',[HealthExpertController::class,'store']);
Route::get('/HealthExpert/list', [HealthExpertController::class, 'get_all'])->name('HealthExpert/list');
Route::get('/HealthExpert/edit/{id}', [HealthExpertController::class, 'edit']);
Route::post('/HealthExpert/update',[HealthExpertController::class,'update'])->name('HealthExpert/update');
Route::get('/HealthExpert/delete/{id}', [HealthExpertController::class, 'delete']);
Route::get('/HealthExpert/search/{id}', [HealthExpertController::class, 'search'])->name('HealthExpert/search');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
