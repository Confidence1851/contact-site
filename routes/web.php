<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController; 

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
        return view('home');
    });



Route::get("list", [ContactController::class, 'list' ]);
Route::get("create", [ContactController::class, 'create']);
Route::post("upload", [ContactController::class, 'upload' ]);
Route::get('/{id}/edit', [ContactController::class, 'edit' ]);
Route::get('edit', [ContactController::class, 'edit' ]);
Route::patch("/update", [ContactController::class, 'update' ]);
Route::get('/{id}/delete', [ContactController::class, 'delete' ]);
