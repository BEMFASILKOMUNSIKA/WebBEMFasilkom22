<?php

use Illuminate\Support\Facades\Route;

Route::prefix('pkmcenter')->namespace('PKM')->middleware(['auth', 'role:User', 'verified'])->group(function () {
    Route::get('/', 'BerandaController@index')->name('pkmcenter');
    Route::get('detail/{slug}', 'BerandaController@show')->name('beranda-detail');

    Route::resource('profil', 'ProfilController');
    Route::put('profil', 'ProfilController@change')->name('profil.change');

    Route::resource('pengajuan', 'PengajuanController');
    Route::post('pengajuan/{id}/upload', 'PengajuanController@uploadFile')->name('pengajuan.upload');
    Route::get('pengajuan/pdf/{id}', 'PengajuanController@show')->name('show');
    Route::get('pengajuan/{id}/registrasi', 'PengajuanController@create')->name('pengajuan.registrasi');
    Route::post('pengajuan/{id}/registrasi', 'PengajuanController@storeMember')->name('pengajuan.store-member');
    Route::get('anggota/{id}/edit', 'PengajuanController@editMember')->name('pengajuan.edit-member');
    Route::put('anggota/{id}', 'PengajuanController@updateMember')->name('pengajuan.update-member');
    Route::get('anggota/{id}/hapus', 'PengajuanController@removeMember')->name('pengajuan.delete-member');
});
