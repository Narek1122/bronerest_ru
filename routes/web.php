<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\CreateFloorPlanController;
use App\Http\Controllers\EditFloorPlanController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\RetoranController;
use App\Http\Controllers\RestoranController;
use App\Http\Controllers\AddFloorPlanController;


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
// })
Route::get('/restoran/{id}', [RestoranController::class, 'show']);

Route::get('/category/{category}', [RestoranController::class, 'category']);

Route::get('/restoran/{category}/{city}', [RestoranController::class, 'filtercategorycity']);

Route::get('/restoran/city/{city}', [RestoranController::class, 'city']);

Route::get('/room/{restoranid}/{roomname}', [RestoranController::class, 'room']);

Route::get('/restoran/lant_long/{latitude}/{longitude}', [RestoranController::class, 'lant_long']);

Route::post('/reservation', [RestoranController::class, 'reservation']);

Route::get('/search/{search}', [RestoranController::class, 'search']);

Route::post('/reservation', [RestoranController::class, 'reservation']);

Route::post('/support', [RestoranController::class, 'support']);





Route::get('/', [DashboardController::class, 'dashboard']);

Route::get('/homes', [RestoranController::class, 'index']);

Route::get('/create-floor-plan', [CreateFloorPlanController::class, 'create_floor_plan']);

Route::post('/add-floor-plan', [AddFloorPlanCoEditFloorPlanControllerntroller::class, 'addFloorPlan']);

Route::get('/edit-floor-plan/{id}/{name}', [EditFloorPlanController::class, 'edit_floor_plan']);

Route::post('/update_floor_plan', [EditFloorPlanController::class, 'update_floor_plan']);

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


Route::group(['middleware' => ['auth']], function() {
    Route::resource('roles', RoleController::class);
    Route::resource('users', UserController::class);
   // Route::resource('products', ProductController::class);
});


// Route::post('/restran',[RetoranController:class,'create']);
// Route::post('/restranupdate/{id}',[RetoranController:class,'show']);
 Route::get('/restran',[RetoranController::class,'index']);
 Route::get('/restran/create',[RetoranController::class,'create']);
 Route::post('/restran/create',[RetoranController::class,'store'])->name('creatrestoran');
 Route::post('/restran/create',[RetoranController::class,'store'])->name('creatrestoran');


