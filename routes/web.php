<?php

use App\Http\Controllers\CompenteceController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\DB;

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

// Route::get('/', [CompenteceController::class, 'index'])->name('index');



Route::resource('/', CompenteceController::class);





// Route::get('/test-database-connection', function () {
//     try {
//         DB::connection()->getPdo();
//         return 'Database connection is successful';
//     } catch (Exception $e) {
//         return 'Database connection failed: ' . $e->getMessage();
//     }
// });



Route::get('competence/ajouter', function () {
    return view('templates/templateAdd');
})->name('competence.ajouter');


Route::get('competence/edit', function () {
    return view('templates/templateEdit');
})->name('competence.edit');


// Add a catch-all route for 'competence' and redirect to 'index'
Route::get('/{any}', function () {
    return redirect()->route('index');
})->where('any', 'competence.*');
