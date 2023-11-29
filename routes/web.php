<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CustomAuthController;
use App\Http\Controllers\Admin\AdminAuthController;
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

// Route::get('/', function () {
//     return view('welcome');
// });



/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
*/
// Route::get('/', function () {
//     if (auth()->check()) {
//         return redirect()->route('dashboard');
//     } else {
//         return redirect()->route('login');
//     }
// })->name('/');
Route::get('dashboard', [CustomAuthController::class, 'dashboard']); 
Route::get('login', [CustomAuthController::class, 'index'])->name('login');
Route::post('custom-login', [CustomAuthController::class, 'customLogin'])->name('login.custom'); 
Route::get('registration', [CustomAuthController::class, 'registration'])->name('register-user');
Route::post('custom-registration', [CustomAuthController::class, 'customRegistration'])->name('register.custom'); 
Route::get('signout', [CustomAuthController::class, 'signOut'])->name('signout');

Route::get('tambah', [CustomAuthController::class, 'tambah']); 
Route::post('proses_tambah', [CustomAuthController::class, 'proses_tambah']); 
Route::get('/cari-mobil',  [CustomAuthController::class, 'cari_mobil']);
Route::get('/pinjam',  [CustomAuthController::class, 'pinjam_page']);
Route::get('/daftar-sewa-user',  [CustomAuthController::class, 'daftar_sewa_user']);
Route::get('/pengembalian',  [CustomAuthController::class, 'pengembalian']);
Route::get('/daftar-pengembalian',  [CustomAuthController::class, 'daftar_pengembalian']);
Route::post('/proses-pengembalian', [CustomAuthController::class, 'pengembalianMobil']);


// Route::get('/pesan-mobil', [CustomAuthController::class, 'pesan_mobil']);
Route::post('/pesan-mobil', [CustomAuthController::class, 'pesanMobil']);


Route::group(['prefix' => 'admin', 'namespace' => 'Admin'], function () {
    Route::get('/login', [AdminAuthController::class, 'getLogin'])->name('adminLogin');
    Route::post('/login', [AdminAuthController::class, 'postLogin'])->name('adminLoginPost');
 
    Route::group(['middleware' => 'adminauth'], function () {
        Route::get('/', function () {
            return view('welcome');
        })->name('adminDashboard');
        Route::get("logout", [AdminAuthController::class, "logout"])->name("logoutAdmin");
        Route::get('/home',[AdminAuthController::class, "home"])->name('admin.home');
    });
});




// // Halaman Home
Route::get('/', function () {
    return view('auth.login');
})->name('login');

