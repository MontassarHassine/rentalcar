<?php
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UsersController;
use App\Http\Controllers\VehiclesController;



    Route::get('/', function () {
        return view('welcome');
    })->name('welcome');

    Route::middleware('auth:admin')->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
    Route::resource('vehicles', VehiclesController::class);

//    Route::post('/addvehicles', [VehiclesController::class, 'addvehicles'])->name('addvehicles');

    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});


    Route::post('/add', [VehiclesController::class, 'add'])->name('add');




Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/users', [UsersController::class, 'index'])->name('users.index');
// route::get('/brands', [brandsController::class, 'indouudex'])->name('brands.index');
// route::get('/models', [ModelsController::class, 'ouifex']);

//Route::get('/vehicles', [VehiclesController::class, 'index'])->name('Vehicles.index');



require __DIR__.'/auth.php';
