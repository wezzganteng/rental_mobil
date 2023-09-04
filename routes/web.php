<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthorController;
use App\Http\Controllers\TbMobilController;
use App\Http\Controllers\TbPenyewaController;


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

Route::get('/detail', function () {
    return view('detail');
});

Route::get('/mobil/detail/{id}',[ 
TbMobilController::class,'detailmobil' 

]);

Route::post('/sewa/mobil/{id}',[ 
    TbPenyewaController::class, 
    'sewa'
    ]);


    Route::get('/mobil_yang_disewa',[ 
        TbPenyewaController::class, 
        'mobilyangdisewa'
        ]);

        Route::post('/mobil/kembalikan/{id}',[ 
            TbPenyewaController::class, 
            'kembalikanmobil'
            ]);

       

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('tes-admin', function() {
    return view('layouts.admin');
});

Route::group(['prefix' => 'admin', 'middleware' => ['auth', 'role:admin']],
function () {
    Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
    Route::get('/', function () {
        return view('admin.index');
    });
    Route::resource('/mobil', TbMobilController::class);
   

    Route::get('/penyewa',[ 
        TbPenyewaController::class, 
        'index'
        ]);
});

Route::group(['prefix' => 'user', 'middleware' => ['auth']],
function () {
    Route::get('/home', [App\Http\Controllers\HomeController::class, 'index2'])->name('home2');
});

Route::resource('author', AuthorController::class);
