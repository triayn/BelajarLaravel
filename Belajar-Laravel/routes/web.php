<?php

use Illuminate\Support\Facades\Route;

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

Route::get('coba', function(){
    return 'Halo, ini adalah rute coba';
});

Route::get('/', function () {
    return view('welcome');
});

Route::view('/welcome', 'welcome');

Route::get('/user/{nama?}', function ($nama = null){
    return $nama;
})->where(["nama" => "[A-Za-z]+"]); 

Route::get('/user/{id_user}', function ($id_user) {
    return "User ID : $id_user";
});
Route::get('/pengguna/{id}', function ($id){
    return  "Pengguna dengan id ". $id ;
});
Route::get('cari/{cari}', function ($cari){
    return $cari;
})->where('cari', '.*');

// Route::get('user/{nama}?' ,function($nama = 'Tria'){
//     return $nama;
// });

// Route::get('/user', [UserController::class, 'index']);

// Route::get($uri, $collback);
// Route::post($uri, $collback);
// Route::put($uri, $collback);
// Route::patch($uri, $collback);
// Route::delete($uri ,$collback);
// Route::options($uri, $collback);