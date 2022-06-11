<?php

use App\CatatanAnak;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use Spatie\Permission\Models\Role;

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
//     $role = Role::find(2);
//     $role->givePermissionTo('delete kunjungan');
//     // dd($role);
//     // return view('welcome');
// });

// Route::get('/', function () {
//     return view('welcome');
// });
// Route::get('/', 'App\Http\Controllers\Auth\LoginController@showLogin');

Auth::routes(['verify' => true]);

// Route::get('/', 'HomeController@index')->name('home');
Route::get('/', 'DashboardController@index')->name('dashboard');

Route::middleware('role:admin')->group(function(){
    // Route::get('/kunjungan', 'KunjunganController@index')->name('kunjungan');
    Route::get('/user', 'UserController@index')->name('user');
});

Route::group(['middleware' => ['auth']], function(){
    
    Route::get('/data-ortu', 'DataOrtuController@index')->name('data-ortu');
    Route::get('/data-ortu/create', 'DataOrtuController@create')->name('data-ortu.create');
    Route::post('/data-ortu/create', 'DataOrtuController@store');
    Route::get('/data-ortu/{dataOrtu}/edit', 'DataOrtuController@edit');
    Route::patch('/data-ortu/{dataOrtu}/edit', 'DataOrtuController@update');
    Route::delete('/data-ortu/{dataOrtu}/delete', 'DataOrtuController@destroy');
    // Route::get('/data-ortu/{dataOrtu}/delete', 'DataOrtuController@destroy');
    Route::get('/data-ortu/{dataOrtu}', 'DataOrtuController@show')->name('data-ortu.show');

    Route::get('/data-anak', 'DataAnakController@index')->name('data-anak');
    Route::get('/data-anak/create', 'DataAnakController@create')->name('data-anak.create');
    Route::post('/data-anak/create', 'DataAnakController@store')->name('data-anak.store');
    Route::get('/data-anak/{dataAnak}/edit', 'DataAnakController@edit');
    Route::patch('/data-anak/{dataAnak}/edit', 'DataAnakController@update');
    Route::delete('/data-anak/{dataAnak}/delete', 'DataAnakController@destroy');
    Route::get('/data-anak/history-pemeriksaan/{anak_id}', 'DataAnakController@history')->name('data-anak.history-pemeriksaan');



    Route::get('/hasil-catatan-anak', 'CatatanController@catatan_anak')->name('hasil-catatan-anak');
    Route::get('/hasil-catatan-kehamilan', 'CatatanController@catatan_kehamilan')->name('hasil-catatan-kehamilan');
    Route::get('/hasil-catatan-persalinan', 'CatatanController@catatan_persalinan')->name('hasil-catatan-persalinan');
    Route::get('/hasil-catatan-anak/print', 'CatatanController@print_catatan_anak')->name('hasil-catatan-anak.print');
    Route::get('/hasil-catatan-kehamilan/print', 'CatatanController@print_catatan_kehamilan')->name('hasil-catatan-kehamilan.print');
    Route::get('/hasil-catatan-persalinan/print', 'CatatanController@print_catatan_persalinan')->name('hasil-catatan-persalinan.print');

    Route::get('/profil', 'ProfilController@index')->name('profil');
    Route::get('/profil/{user}/edit', 'ProfilController@edit')->name('profil.edit');
    Route::patch('/profil/{user}/edit', 'ProfilController@update')->name('profil.update');

});


Route::group(['middleware' => ['role:Admin']], function() {
    Route::resource('/users', 'UserController');
    // Route::resource('/roles', 'RoleController');
    Route::get('/catatan-anak', 'CatatanAnakController@index')->name('catatan-anak');
    Route::get('/catatan-anak/create', 'CatatanAnakController@create')->name('catatan-anak.create');
    Route::post('/catatan-anak/create', 'CatatanAnakController@store');
    Route::get('/catatan-anak/{catatanAnak}/edit', 'CatatanAnakController@edit');
    Route::patch('/catatan-anak/{catatanAnak}/edit', 'CatatanAnakController@update');
    Route::delete('/catatan-anak/{catatanAnak}/delete', 'CatatanAnakController@destroy');


    Route::get('/Catatan-kehamilan', 'CatatanKehamilanController@index')->name('Catatan-kehamilan');
    Route::get('/Catatan-kehamilan/create', 'CatatanKehamilanController@create');
    Route::post('/Catatan-kehamilan/create', 'CatatanKehamilanController@store');
    Route::get('/Catatan-kehamilan/{catatanKehamilan}/edit', 'CatatanKehamilanController@edit');
    Route::patch('/Catatan-kehamilan/{catatanKehamilan}/edit', 'CatatanKehamilanController@update');
    Route::delete('/Catatan-kehamilan/{catatanKehamilan}/delete', 'CatatanKehamilanController@destroy');

    Route::get('/Catatan-persalinan', "CatatanPersalinanController@index")->name('Catatan-persalinan.index');
    Route::get('/Catatan-persalinan/create', "CatatanPersalinanController@create");
    Route::post('/Catatan-persalinan/create', "CatatanPersalinanController@store");
    Route::get('/Catatan-persalinan/{catatanPersalinan}/edit', 'CatatanPersalinanController@edit');
    Route::patch('/Catatan-persalinan/{catatanPersalinan}/edit', 'CatatanPersalinanController@update');
    Route::delete('/Catatan-persalinan/{catatanPersalinan}/delete', 'CatatanPersalinanController@destroy');
    
    Route::resource('data-anak/pemeriksaan-anak', 'PemeriksaanAnakController');
    // Route::delete('/Catatan-persalinan/{catatanPersalinan}/delete', 'CatatanPersalinanController@destroy');
    // Route::get('data-anak/pemeriksaan-anak/{pemeriksaan_anak}','PemeriksaanAnakController@hapus');
});

