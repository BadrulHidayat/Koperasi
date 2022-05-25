<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

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

Route::group(['middleware' => 'auth'], function () {
    Route::prefix('/user/')->group(function () {
        Route::get('ahli/daftarAhli', 'App\Http\Controllers\MainController@daftarAhli')->name('daftarAhli');
        Route::match(['get', 'post'], 'ahli/pengesahanAhli', 'App\Http\Controllers\MainController@pengesahanAhli')->name('pengesahanAhli');
        Route::post('ahli/simpanAhli', 'App\Http\Controllers\MainController@simpanAhli')->name('simpanAhli');
        Route::get('ahli/statusDaftar', 'App\Http\Controllers\MainController@statusDaftar')->name('statusDaftar');

        //Route maklumat ahli
        Route::get('ahli/maklumatAhli', 'App\Http\Controllers\MainController@maklumatAhli')->name('maklumatAhli');
        Route::post('ahli/maklumatAhliCari', 'App\Http\Controllers\MainController@maklumatAhliCari')->name('maklumatAhliCari');
        Route::get('ahli/maklumatAhliHasil', 'App\Http\Controllers\MainController@maklumatAhliHasil')->name('maklumatAhliHasil');
        Route::get('ahli/maklumatAhliKemaskini/{noKPBaru}', 'App\Http\Controllers\MainController@maklumatAhliKemaskini')->name('maklumatAhliKemaskini');
        Route::post('ahli/kemaskiniAhli/{noKPBaru}', 'App\Http\Controllers\MainController@kemaskiniAhli')->name('kemaskiniAhli');

        //Route alamat ahli
        Route::post('ahli/updateAlamat/{noKPBaru}', 'App\Http\Controllers\MainController@updateAlamat')->name('updateAlamat');
        Route::get('ahli/padamAlamat/{noKPBaru}', 'App\Http\Controllers\MainController@padamAlamat')->name('padamAlamat');
        Route::post('ahli/daftarAlamat/{noKPBaru}', 'App\Http\Controllers\MainController@daftarAlamat')->name('daftarAlamat');

        //Route no telefon ahli
        Route::post('ahli/updateTelR/{noKPBaru}', 'App\Http\Controllers\MainController@updateTelR')->name('updateTelR');
        Route::post('ahli/updateTelP/{noKPBaru}', 'App\Http\Controllers\MainController@updateTelP')->name('updateTelP');
        Route::post('ahli/updateTelHP/{noKPBaru}', 'App\Http\Controllers\MainController@updateTelHP')->name('updateTelHP');
        Route::post('ahli/updatefaks/{noKPBaru}', 'App\Http\Controllers\MainController@updatefaks')->name('updatefaks');
        Route::post('ahli/updateEmail/{noKPBaru}', 'App\Http\Controllers\MainController@updateEmail')->name('updateEmail');
        Route::get('ahli/padamTelRAhli/{noKPBaru}', 'App\Http\Controllers\MainController@padamTelRAhli')->name('padamTelRAhli');
        Route::get('ahli/padamTelPAhli/{noKPBaru}', 'App\Http\Controllers\MainController@padamTelPAhli')->name('padamTelPAhli');
        Route::get('ahli/padamTelHPAhli/{noKPBaru}', 'App\Http\Controllers\MainController@padamTelHPAhli')->name('padamTelHPAhli');
        Route::get('ahli/padamFaksAhli/{noKPBaru}', 'App\Http\Controllers\MainController@padamFaksAhli')->name('padamFaksAhli');
        Route::get('ahli/padamEmailAhli/{noKPBaru}', 'App\Http\Controllers\MainController@padamEmailAhli')->name('padamEmailAhli');

        //Route akaun bank ahli
        Route::post('ahli/updateBank/{noKPBaru}', 'App\Http\Controllers\MainController@updateBank')->name('updateBank');
        Route::get('ahli/padamBankAhli/{noKPBaru}', 'App\Http\Controllers\MainController@padamBankAhli')->name('padamBankAhli');
        Route::post('ahli/daftarBank/{noKPBaru}', 'App\Http\Controllers\MainController@daftarBank')->name('daftarBank');

        //Route yuran ahli
        Route::get('ahli/daftarYuran', 'App\Http\Controllers\MainController@daftarYuran')->name('daftarYuran');
        Route::get('ahli/daftarYuran2', 'App\Http\Controllers\MainController@daftarYuran2')->name('daftarYuran2');
        Route::post('ahli/cariAhliYuran', 'App\Http\Controllers\MainController@cariAhliYuran')->name('cariAhliYuran');
        Route::get('ahli/transaksiJenis', 'App\Http\Controllers\MainController@transaksiJenis')->name('transaksiJenis');
        Route::get('ahli/transaksiTarikh', 'App\Http\Controllers\MainController@transaksiTarikh')->name('transaksiTarikh');
        Route::get('ahli/transaksiMasuk', 'App\Http\Controllers\MainController@transaksiMasuk')->name('transaksiMasuk');

        //Route Daftar berhenti
        Route::get('ahli/daftarBerhenti', 'App\Http\Controllers\MainController@daftarBerhenti')->name('daftarBerhenti');
        Route::get('ahli/daftarBerhenti2', 'App\Http\Controllers\MainController@daftarBerhenti2')->name('daftarBerhenti2');
        Route::post('ahli/cariAhliBerhenti', 'App\Http\Controllers\MainController@cariAhliBerhenti')->name('cariAhliBerhenti');
        Route::post('ahli/daftarBerhentiTambah', 'App\Http\Controllers\MainController@daftarBerhentiTambah')->name('daftarBerhentiTambah');

        //Route maklumat pemberhentian
        Route::get('ahli/maklumatBerhenti', 'App\Http\Controllers\MainController@maklumatBerhenti')->name('maklumatBerhenti');
        Route::get('ahli/maklumatBerhenti2', 'App\Http\Controllers\MainController@maklumatBerhenti2')->name('maklumatBerhenti2');
        Route::post('ahli/cariMaklumatBerhenti', 'App\Http\Controllers\MainController@cariMaklumatBerhenti')->name('cariMaklumatBerhenti');
        Route::get('ahli/maklumatBerhentiUpdate/{noKPBaru}', 'App\Http\Controllers\MainController@maklumatBerhentiUpdate')->name('maklumatBerhentiUpdate');
        Route::post('ahli/kemaskiniBerhenti/{noKPBaru}', 'App\Http\Controllers\MainController@kemaskiniBerhenti')->name('kemaskiniBerhenti');

        //Route Kelulusan Pemberhentian
        Route::get('ahli/kelulusanPemberhentian', 'App\Http\Controllers\MainController@kelulusanPemberhentian')->name('kelulusanPemberhentian');
        Route::get('ahli/kelulusanPemberhentian2', 'App\Http\Controllers\MainController@kelulusanPemberhentian2')->name('kelulusanPemberhentian2');
        Route::post('ahli/lulusBerhentiCari', 'App\Http\Controllers\MainController@lulusBerhentiCari')->name('lulusBerhentiCari');

        //Route Daftar Kakitangan
        Route::get('kakitangan/daftarKakitangan', 'App\Http\Controllers\MainController@daftarKakitangan')->name('daftarKakitangan');
        Route::match(['get', 'post'], 'kakitangan/pengesahanKakitangan', 'App\Http\Controllers\MainController@pengesahanKakitangan')->name('pengesahanKakitangan');
        Route::post('kakitangan/simpanKakitangan', 'App\Http\Controllers\MainController@simpanKakitangan')->name('simpanKakitangan');
        Route::get('kakitangan/statusKakitangan', 'App\Http\Controllers\MainController@statusKakitangan')->name('statusKakitangan');

        //Route maklumat kakitangan
        Route::get('kakitangan/maklumatStaff', 'App\Http\Controllers\MainController@maklumatStaff')->name('maklumatStaff');
        Route::post('kakitangan/maklumatStaffCari', 'App\Http\Controllers\MainController@maklumatStaffCari')->name('maklumatStaffCari');
        Route::get('kakitangan/maklumatStaffHasil', 'App\Http\Controllers\MainController@maklumatStaffHasil')->name('maklumatStaffHasil');
        Route::get('kakitangan/maklumatStaffKemaskini/{noKPBaru}', 'App\Http\Controllers\MainController@maklumatStaffKemaskini')->name('maklumatStaffKemaskini');
        Route::post('kakitangan/kemaskiniStaff/{noKPBaru}', 'App\Http\Controllers\MainController@kemaskiniStaff')->name('kemaskiniStaff');

        //Route alamat kakitangan
        Route::post('kakitangan/updateAlamatStaff/{noKPBaru}', 'App\Http\Controllers\MainController@updateAlamatStaff')->name('updateAlamatStaff');
        Route::get('kakitangan/padamAlamatStaff/{noKPBaru}', 'App\Http\Controllers\MainController@padamAlamatStaff')->name('padamAlamatStaff');
        Route::post('kakitangan/daftarAlamatStaff/{noKPBaru}', 'App\Http\Controllers\MainController@daftarAlamatStaff')->name('daftarAlamatStaff');

        //Route no telefon kakitangan
        Route::post('kakitangan/updateTelRStaff/{noKPBaru}', 'App\Http\Controllers\MainController@updateTelRStaff')->name('updateTelRStaff');
        Route::post('kakitangan/updateTelPStaff/{noKPBaru}', 'App\Http\Controllers\MainController@updateTelPStaff')->name('updateTelPStaff');
        Route::post('kakitangan/updateTelHPStaff/{noKPBaru}', 'App\Http\Controllers\MainController@updateTelHPStaff')->name('updateTelHPStaff');
        Route::post('kakitangan/updatefaksStaff/{noKPBaru}', 'App\Http\Controllers\MainController@updatefaksStaff')->name('updatefaksStaff');
        Route::post('kikatangan/updateEmailStaff/{noKPBaru}', 'App\Http\Controllers\MainController@updateEmailStaff')->name('updateEmailStaff');
        Route::get('kakitangan/padamTelRStaff/{noKPBaru}', 'App\Http\Controllers\MainController@padamTelRStaff')->name('padamTelRStaff');
        Route::get('kakitangan/padamTelPStaff/{noKPBaru}', 'App\Http\Controllers\MainController@padamTelPStaff')->name('padamTelPStaff');
        Route::get('kakitangan/padamTelHPStaff/{noKPBaru}', 'App\Http\Controllers\MainController@padamTelHPStaff')->name('padamTelHPStaff');
        Route::get('kakitangan/padamFaksStaff/{noKPBaru}', 'App\Http\Controllers\MainController@padamFaksStaff')->name('padamFaksStaff');
        Route::get('kakitangan/padamEmailStaff/{noKPBaru}', 'App\Http\Controllers\MainController@padamEmailStaff')->name('padamEmailStaff');

        //Route akaun bank ahli
        Route::post('kakitangan/updateBankStaff/{noKPBaru}', 'App\Http\Controllers\MainController@updateBankStaff')->name('updateBankStaff');
        Route::get('kakitangan/padamBankStaff/{noKPBaru}', 'App\Http\Controllers\MainController@padamBankStaff')->name('padamBankStaff');
        Route::post('kakitangan/daftarBankStaff/{noKPBaru}', 'App\Http\Controllers\MainController@daftarBankStaff')->name('daftarBankStaff');

        //Route pendidikan Kakitangan
        Route::post('kakitangan/updatePendidikanStaff/{noKPBaru}', 'App\Http\Controllers\MainController@updatePendidikanStaff')->name('updatePendidikanStaff');
        Route::get('kakitangan/padamPendidikanStaff/{noKPBaru}', 'App\Http\Controllers\MainController@padamPendidikanStaff')->name('padamPendidikanStaff');
        Route::post('kakitangan/daftarPendidikanStaff/{noKPBaru}', 'App\Http\Controllers\MainController@daftarPendidikanStaff')->name('daftarPendidikanStaff');
    });
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');