<?php

use App\Http\Controllers\HomeController;
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
// Route::redirect('/coba', '/welcome');
Route::view('/welcome', 'welcome');
Route::get('/user/{nama?}', function ($nama = null){
    return $nama;
})->where(["nama" => "[A-Za-z]+"]); 
Route::get('/user/{id_user}', function ($id_user) {
    return "User ID : $id_user";
})->where(["id_user" => "[0-9]+"]);
Route::get('/pengguna/{id}', function ($id){
    return  "Pengguna dengan id ". $id ;
});
Route::get('cari/{cari}', function ($cari){
    return $cari;
})->where('cari', '.*');

Route::get('/home', [HomeController::class, 'index']);

// Route::get($uri, $collback);        // Digunakan untuk mendapatkan informasi atau halaman
// Route::post($uri, $collback);       //  Digunakan untuk melakukan proses input data ke database
// Route::put($uri, $collback);        //  Digunakan untuk memperbarui data yang sudah ada di database
// Route::patch($uri, $collback);      // Sama seperti put, tapi hanya perbarui field yang telah dim
// Route::delete($uri ,$collback);     // Menghapus data dari database
// Route::options($uri, $collback);    //  Menampilkan opsi HTTP yang didukung oleh resource tersebut.

Route::get('/pengguna/{id}/profile', function ($id) {
    return "Profile pengguna dengan id {$id} ";
})->name('profile');

// Route::middleware(['auth', 'verified'])->group(function () {

//     Route::namespace('User')->group(function () {
//         Route::get('/user/{nama?}', [UserController::class, 'showName'])
//              ->where(["nama" => "[A-Za-z]+"]);

//         Route::get('/user/{id_user}', [UserController::class, 'showId'])
//              ->where(["id_user" => "[0-9]+"]);
//     });
// });

// Route::domain('user.domain.com')->group(function () {
//     Route::get('/', [UserController::class, 'index']);
//     Route::get('/profile', [UserController::class, 'profile']);
// });

// Route::prefix('user')->group(function () {
//     Route::get('/', [UserController::class, 'index'])->name('user.index');
//     Route::get('/profile', [UserController::class, 'profile'])->name('user.profile');
// });
