<?php
use Illuminate\Http\Request;


$router->post('/register','UserController@register');
$router->group(['prefix' => 'api'], function () use ($router) {
	$router->post('register','UserController@register');
	$router->post('login','UserController@register');
});

$router->group(['prefix' => 'aset'], function () use ($router) {
   // Matches "/api/register
   $router->post('register', 'AuthController@register');
   $router->post('login', 'AuthController@login');
});

$router->group(['prefix' => 'aset'], function () use ($router) {
	$router->get('golongan',  ['uses' => 'GolonganController@showAllAnggota']);
	$router->get('golongan/{id}', ['uses' => 'GolonganController@showOneAnggota']);
	$router->post('golongan', ['uses' => 'GolonganController@create']);
	$router->delete('golongan/{id}', ['uses' => 'GolonganController@delete']);
	$router->post('golongan/{id}', ['uses' => 'GolonganController@update']);	
});

$router->group(['prefix' => 'aset'], function () use ($router) {
	$router->get('kelompok',  ['uses' => 'KelompokController@showAllAnggota']);
	$router->get('kelompok/{id}', ['uses' => 'KelompokController@showOneAnggota']);
	$router->post('kelompok', ['uses' => 'KelompokController@create']);
	$router->delete('kelompok/{id}', ['uses' => 'KelompokController@delete']);
	$router->post('kelompok/{id}', ['uses' => 'KelompokController@update']);	
});

$router->group(['prefix' => 'aset'], function () use ($router) {
	$router->get('kondisi',  ['uses' => 'KondisiController@showAllAnggota']);
	$router->get('kondisi/{id}', ['uses' => 'KondisiController@showOneAnggota']);
	$router->post('kondisi', ['uses' => 'KondisiController@create']);
	$router->delete('kondisi/{id}', ['uses' => 'KondisiController@delete']);
	$router->post('kondisi/{id}', ['uses' => 'KondisiController@update']);
});	

$router->group(['prefix' => 'aset'], function () use ($router) {
	$router->get('satuan',  ['uses' => 'SatuanController@showAllAnggota']);
	$router->get('satuan/{id}', ['uses' => 'SatuanController@showOneAnggota']);
	$router->post('satuan', ['uses' => 'SatuanController@create']);
	$router->delete('satuan/{id}', ['uses' => 'SatuanController@delete']);
	$router->post('satuan/{id}', ['uses' => 'SatuanController@update']);
});	

$router->group(['prefix' => 'aset'], function () use ($router) {
	$router->get('sumberdana',  ['uses' => 'SumberDanaController@showAllAnggota']);
	$router->get('sumberdana/{id}', ['uses' => 'SumberDanaController@showOneAnggota']);
	$router->post('sumberdana', ['uses' => 'SumberDanaController@create']);
	$router->delete('sumberdana/{id}', ['uses' => 'SumberDanaController@delete']);
	$router->post('sumberdana/{id}', ['uses' => 'SumberDanaController@update']);
});	

$router->group(['prefix' => 'aset'], function () use ($router) {
	$router->get('kodeperkiraan',  ['uses' => 'KodePerkiraanController@showAllAnggota']);
	$router->get('kodeperkiraan/{id}', ['uses' => 'KodePerkiraanController@showOneAnggota']);
	$router->post('kodeperkiraan', ['uses' => 'KodePerkiraanController@create']);
	$router->delete('kodeperkiraan/{id}', ['uses' => 'KodePerkiraanController@delete']);
	$router->post('kodeperkiraan/{id}', ['uses' => 'KodePerkiraanController@update']);
});

$router->group(['prefix' => 'aset'], function () use ($router) {
	$router->get('subperkiraan',  ['uses' => 'SubPerkiraanController@showAllAnggota']);
	$router->get('subperkiraan/{id}', ['uses' => 'SubPerkiraanController@showOneAnggota']);
	$router->post('subperkiraan', ['uses' => 'SubPerkiraanController@create']);
	$router->delete('subperkiraan/{id}', ['uses' => 'SubPerkiraanController@delete']);
	$router->post('subperkiraan/{id}', ['uses' => 'SubPerkiraanController@update']);
});

$router->group(['prefix' => 'aset'], function () use ($router) {
	$router->get('lokasi',  ['uses' => 'LokasiController@showAllAnggota']);
	$router->get('lokasi/{id}', ['uses' => 'LokasiController@showOneAnggota']);
	$router->post('lokasi', ['uses' => 'LokasiController@create']);
	$router->delete('lokasi/{id}', ['uses' => 'LokasiController@delete']);
	$router->post('lokasi/{id}', ['uses' => 'LokasiController@update']);
});

$router->group(['prefix' => 'aset'], function () use ($router) {
	$router->get('penyusutan',  ['uses' => 'PenyusutanController@showAllAnggota']);
	$router->get('penyusutan/{id}', ['uses' => 'PenyusutanController@showOneAnggota']);
	$router->post('penyusutan', ['uses' => 'PenyusutanController@create']);
	$router->delete('penyusutan/{id}', ['uses' => 'PenyusutanController@delete']);
	$router->post('penyusutan/{id}', ['uses' => 'PenyusutanController@update']);
});

$router->group(['prefix' => 'aset'], function () use ($router) {
	$router->get('aset',  ['uses' => 'AsetController@showAllAnggota']);
	$router->get('aset/{id}', ['uses' => 'AsetController@showOneAnggota']);
	$router->post('aset', ['uses' => 'AsetController@create']);
	$router->delete('aset/{id}', ['uses' => 'AsetController@delete']);
	$router->post('aset/{id}', ['uses' => 'AsetController@update']);
	$router->get('aset/{id}/load', ['uses' => 'AsetController@loadDetail']);
});