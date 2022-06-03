<?php

use App\Http\Controllers\AhliController;
use App\Http\Controllers\KakitanganController;
use App\Http\Controllers\MainController;
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
        Route::get('ahli/daftarAhli', 'App\Http\Controllers\AhliController@daftarAhli')->name('daftarAhli');
        Route::match(['get', 'post'], 'ahli/pengesahanAhli', 'App\Http\Controllers\AhliController@pengesahanAhli')->name('pengesahanAhli');
        Route::post('ahli/simpanAhli', 'App\Http\Controllers\AhliController@simpanAhli')->name('simpanAhli');
        Route::get('ahli/statusDaftar', 'App\Http\Controllers\AhliController@statusDaftar')->name('statusDaftar');

        //Route maklumat ahli
        Route::get('ahli/maklumatAhli', 'App\Http\Controllers\AhliController@maklumatAhli')->name('maklumatAhli');
        Route::post('ahli/maklumatAhliCari', 'App\Http\Controllers\AhliController@maklumatAhliCari')->name('maklumatAhliCari');
        Route::get('ahli/maklumatAhliHasil/{noKPBaru}', 'App\Http\Controllers\AhliController@maklumatAhliHasil')->name('maklumatAhliHasil');
        Route::get('ahli/maklumatAhliKemaskini/{noKPBaru}', 'App\Http\Controllers\AhliController@maklumatAhliKemaskini')->name('maklumatAhliKemaskini');
        Route::post('ahli/kemaskiniAhli/{noKPBaru}', 'App\Http\Controllers\AhliController@kemaskiniAhli')->name('kemaskiniAhli');

        //Route alamat ahli
        Route::post('ahli/updateAlamat/{noKPBaru}', 'App\Http\Controllers\AhliController@updateAlamat')->name('updateAlamat');
        Route::get('ahli/padamAlamat/{noKPBaru}', 'App\Http\Controllers\AhliController@padamAlamat')->name('padamAlamat');
        Route::post('ahli/daftarAlamat/{noKPBaru}', 'App\Http\Controllers\AhliController@daftarAlamat')->name('daftarAlamat');

        //Route no telefon ahli
        Route::post('ahli/updateTelR/{noKPBaru}', 'App\Http\Controllers\AhliController@updateTelR')->name('updateTelR');
        Route::post('ahli/updateTelP/{noKPBaru}', 'App\Http\Controllers\AhliController@updateTelP')->name('updateTelP');
        Route::post('ahli/updateTelHP/{noKPBaru}', 'App\Http\Controllers\AhliController@updateTelHP')->name('updateTelHP');
        Route::post('ahli/updatefaks/{noKPBaru}', 'App\Http\Controllers\AhliController@updatefaks')->name('updatefaks');
        Route::post('ahli/updateEmail/{noKPBaru}', 'App\Http\Controllers\AhliController@updateEmail')->name('updateEmail');
        Route::get('ahli/padamTelRAhli/{noKPBaru}', 'App\Http\Controllers\AhliController@padamTelRAhli')->name('padamTelRAhli');
        Route::get('ahli/padamTelPAhli/{noKPBaru}', 'App\Http\Controllers\AhliController@padamTelPAhli')->name('padamTelPAhli');
        Route::get('ahli/padamTelHPAhli/{noKPBaru}', 'App\Http\Controllers\AhliController@padamTelHPAhli')->name('padamTelHPAhli');
        Route::get('ahli/padamFaksAhli/{noKPBaru}', 'App\Http\Controllers\AhliController@padamFaksAhli')->name('padamFaksAhli');
        Route::get('ahli/padamEmailAhli/{noKPBaru}', 'App\Http\Controllers\AhliController@padamEmailAhli')->name('padamEmailAhli');

        //Route akaun bank ahli
        Route::post('ahli/updateBank/{noKPBaru}', 'App\Http\Controllers\AhliController@updateBank')->name('updateBank');
        Route::get('ahli/padamBankAhli/{noKPBaru}', 'App\Http\Controllers\AhliController@padamBankAhli')->name('padamBankAhli');
        Route::post('ahli/daftarBank/{noKPBaru}', 'App\Http\Controllers\AhliController@daftarBank')->name('daftarBank');

        //Route yuran ahli
        Route::get('ahli/daftarYuran', 'App\Http\Controllers\AhliController@daftarYuran')->name('daftarYuran');
        Route::get('ahli/daftarYuran2', 'App\Http\Controllers\AhliController@daftarYuran2')->name('daftarYuran2');
        Route::post('ahli/cariAhliYuran', 'App\Http\Controllers\AhliController@cariAhliYuran')->name('cariAhliYuran');
        Route::get('ahli/transaksiJenis', 'App\Http\Controllers\AhliController@transaksiJenis')->name('transaksiJenis');
        Route::get('ahli/transaksiTarikh', 'App\Http\Controllers\AhliController@transaksiTarikh')->name('transaksiTarikh');
        Route::get('ahli/transaksiMasuk', 'App\Http\Controllers\AhliController@transaksiMasuk')->name('transaksiMasuk');

        //Route Daftar berhenti
        Route::get('ahli/daftarBerhenti', 'App\Http\Controllers\AhliController@daftarBerhenti')->name('daftarBerhenti');
        Route::get('ahli/daftarBerhenti2', 'App\Http\Controllers\AhliController@daftarBerhenti2')->name('daftarBerhenti2');
        Route::post('ahli/cariAhliBerhenti', 'App\Http\Controllers\AhliController@cariAhliBerhenti')->name('cariAhliBerhenti');
        Route::get('ahli/daftarBerhentiForm/{noKPBaru}', 'App\Http\Controllers\AhliController@daftarBerhentiForm')->name('daftarBerhentiForm');
        Route::post('ahli/daftarBerhentiTambah', 'App\Http\Controllers\AhliController@daftarBerhentiTambah')->name('daftarBerhentiTambah');

        //Route maklumat pemberhentian
        Route::get('ahli/maklumatBerhenti', 'App\Http\Controllers\AhliController@maklumatBerhenti')->name('maklumatBerhenti');
        Route::get('ahli/maklumatBerhenti2', 'App\Http\Controllers\AhliController@maklumatBerhenti2')->name('maklumatBerhenti2');
        Route::post('ahli/cariMaklumatBerhenti', 'App\Http\Controllers\AhliController@cariMaklumatBerhenti')->name('cariMaklumatBerhenti');
        Route::get('ahli/maklumatBerhentiUpdate/{noKPBaru}', 'App\Http\Controllers\AhliController@maklumatBerhentiUpdate')->name('maklumatBerhentiUpdate');
        Route::post('ahli/kemaskiniBerhenti/{noKPBaru}', 'App\Http\Controllers\AhliController@kemaskiniBerhenti')->name('kemaskiniBerhenti');
        Route::get('ahli/padamMaklumatBerhenti/{id}', 'App\Http\Controllers\AhliController@padamMaklumatBerhenti')->name('padamMaklumatBerhenti');

        //Route Kelulusan Pemberhentian
        Route::get('ahli/kelulusanPemberhentian', 'App\Http\Controllers\AhliController@kelulusanPemberhentian')->name('kelulusanPemberhentian');
        Route::get('ahli/kelulusanPemberhentian2', 'App\Http\Controllers\AhliController@kelulusanPemberhentian2')->name('kelulusanPemberhentian2');
        Route::get('ahli/kelulusanPemberhentianEdit/{noKPBaru}', 'App\Http\Controllers\AhliController@kelulusanPemberhentianEdit')->name('kelulusanPemberhentianEdit');
        Route::post('ahli/lulusBerhentiCari', 'App\Http\Controllers\AhliController@lulusBerhentiCari')->name('lulusBerhentiCari');
        Route::post('ahli/kelulusanPemberhentianUpdate/{noKPBaru}', 'App\Http\Controllers\AhliController@kelulusanPemberhentianUpdate')->name('kelulusanPemberhentianUpdate');

        //Route Daftar Kakitangan
        Route::get('kakitangan/daftarKakitangan', 'App\Http\Controllers\KakitanganController@daftarKakitangan')->name('daftarKakitangan');
        Route::match(['get', 'post'], 'kakitangan/pengesahanKakitangan', 'App\Http\Controllers\KakitanganController@pengesahanKakitangan')->name('pengesahanKakitangan');
        Route::post('kakitangan/simpanKakitangan', 'App\Http\Controllers\KakitanganController@simpanKakitangan')->name('simpanKakitangan');
        Route::get('kakitangan/statusKakitangan', 'App\Http\Controllers\KakitanganController@statusKakitangan')->name('statusKakitangan');

        //Route maklumat kakitangan
        Route::get('kakitangan/maklumatStaff', 'App\Http\Controllers\KakitanganController@maklumatStaff')->name('maklumatStaff');
        Route::get('kakitangan/maklumatStaff2', 'App\Http\Controllers\KakitanganController@maklumatStaff2')->name('maklumatStaff2');
        Route::post('kakitangan/maklumatStaffCari', 'App\Http\Controllers\KakitanganController@maklumatStaffCari')->name('maklumatStaffCari');
        Route::get('kakitangan/maklumatStaffHasil/{noKPBaru}', 'App\Http\Controllers\KakitanganController@maklumatStaffHasil')->name('maklumatStaffHasil');
        Route::get('kakitangan/maklumatStaffKemaskini/{noKPBaru}', 'App\Http\Controllers\KakitanganController@maklumatStaffKemaskini')->name('maklumatStaffKemaskini');
        Route::post('kakitangan/kemaskiniStaff/{noKPBaru}', 'App\Http\Controllers\KakitanganController@kemaskiniStaff')->name('kemaskiniStaff');

        //Route alamat kakitangan
        Route::post('kakitangan/updateAlamatStaff/{noKPBaru}', 'App\Http\Controllers\KakitanganController@updateAlamatStaff')->name('updateAlamatStaff');
        Route::get('kakitangan/padamAlamatStaff/{noKPBaru}', 'App\Http\Controllers\KakitanganController@padamAlamatStaff')->name('padamAlamatStaff');
        Route::post('kakitangan/daftarAlamatStaff/{noKPBaru}', 'App\Http\Controllers\KakitanganController@daftarAlamatStaff')->name('daftarAlamatStaff');

        //Route perhubungan kakitangan
        Route::post('kakitangan/updateTelRStaff/{noKPBaru}', 'App\Http\Controllers\KakitanganController@updateTelRStaff')->name('updateTelRStaff');
        Route::post('kakitangan/updateTelPStaff/{noKPBaru}', 'App\Http\Controllers\KakitanganController@updateTelPStaff')->name('updateTelPStaff');
        Route::post('kakitangan/updateTelHPStaff/{noKPBaru}', 'App\Http\Controllers\KakitanganController@updateTelHPStaff')->name('updateTelHPStaff');
        Route::post('kakitangan/updatefaksStaff/{noKPBaru}', 'App\Http\Controllers\KakitanganController@updatefaksStaff')->name('updatefaksStaff');
        Route::post('kikatangan/updateEmailStaff/{noKPBaru}', 'App\Http\Controllers\KakitanganController@updateEmailStaff')->name('updateEmailStaff');
        Route::get('kakitangan/padamTelRStaff/{noKPBaru}', 'App\Http\Controllers\KakitanganController@padamTelRStaff')->name('padamTelRStaff');
        Route::get('kakitangan/padamTelPStaff/{noKPBaru}', 'App\Http\Controllers\KakitanganController@padamTelPStaff')->name('padamTelPStaff');
        Route::get('kakitangan/padamTelHPStaff/{noKPBaru}', 'App\Http\Controllers\KakitanganController@padamTelHPStaff')->name('padamTelHPStaff');
        Route::get('kakitangan/padamFaksStaff/{noKPBaru}', 'App\Http\Controllers\KakitanganController@padamFaksStaff')->name('padamFaksStaff');
        Route::get('kakitangan/padamEmailStaff/{noKPBaru}', 'App\Http\Controllers\KakitanganController@padamEmailStaff')->name('padamEmailStaff');

        //Route akaun bank ahli
        Route::post('kakitangan/updateBankStaff/{noKPBaru}', 'App\Http\Controllers\KakitanganController@updateBankStaff')->name('updateBankStaff');
        Route::get('kakitangan/padamBankStaff/{noKPBaru}', 'App\Http\Controllers\KakitanganController@padamBankStaff')->name('padamBankStaff');
        Route::post('kakitangan/daftarBankStaff/{noKPBaru}', 'App\Http\Controllers\KakitanganController@daftarBankStaff')->name('daftarBankStaff');

        //Route pendidikan Kakitangan
        Route::post('kakitangan/updatePendidikanStaff/{noKPBaru}', 'App\Http\Controllers\KakitanganController@updatePendidikanStaff')->name('updatePendidikanStaff');
        Route::get('kakitangan/padamPendidikanStaff/{noKPBaru}', 'App\Http\Controllers\KakitanganController@padamPendidikanStaff')->name('padamPendidikanStaff');
        Route::post('kakitangan/daftarPendidikanStaff/{noKPBaru}', 'App\Http\Controllers\KakitanganController@daftarPendidikanStaff')->name('daftarPendidikanStaff');
    });
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
