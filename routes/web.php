<?php

use App\Http\Controllers\HomeController;

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

/// Auth routes ///
Auth::routes();
/// Base routes ///
Route::get('/', 'HomeController@index')->name('home');
Route::get('/us', 'HomeController@us')->name('us');
Route::get('/faq','HomeController@faq')->name('faq');

/// Ammo routes ///
// ** Route::resource('ammo', 'AmmoController');
/* ||Ammo *** Non-AuthRoute|| */
Route::prefix('ammo')->name('ammo.')->group(function () {
  Route::get('/', 'AmmoController@index')->name('index');
/** ||Ammo *** AuthRoute|| **/
  Route::middleware('auth')->group(function () {
    Route::get('/create', 'AmmoController@create')->name('create');
    Route::post('/', 'AmmoController@store')->name('store');
    Route::get('{slug}/edit', 'AmmoController@edit')->name('edit');
    Route::put('/{slug}', 'AmmoController@update')->name('update');
    Route::delete('/{slug}', 'AmmoController@destroy')->name('destroy');
    //My Routes
    Route::get('/historial', 'AmmoController@historial')->name('history');
    Route::patch('/{slug}/activate', 'AmmoController@activate')->name('activate');
    Route::patch('/{slug}/deactivate', 'AmmoController@deactivate')->name('deactivate');
    Route::get('/{slug}/preview', 'AmmoController@preview')->name('preview');
  });
  Route::get('/{slug}', 'AmmoController@show')->name('show');
});

/// Armor routes ///
Route::prefix('armor')->group(function () {
  Route::get('/', 'ArmorController@index');
  Route::get('/{slug}', 'ArmorController@show');
});
/* AuthRoute */
Route::prefix('armor')->group(function () {
  Route::get('/create', 'ArmorController@create');
  Route::post('/', 'ArmorController@store');
  Route::get('{slug}/edit', 'ArmorController@edit');
  Route::put('/{slug}', 'ArmorController@update');
  Route::delete('/{slug}', 'ArmorController@destroy');
  //My Routes
  Route::get('/historial', 'ArmorController@historial');
  Route::patch('/{slug}/activate', 'ArmorController@activate');
  Route::patch('/{slug}/deactivate', 'ArmorController@deactivate');
  Route::get('/{slug}/preview', 'ArmorController@preview');
});

/// Item routes ///
Route::prefix('item')->group(function () {
  Route::get('/', 'ItemController@index');
  Route::get('/{slug}', 'ItemController@show');
});
/* AuthRoute */
Route::prefix('item')->group(function () {
  Route::get('/create', 'ItemController@create');
  Route::post('/', 'ItemController@store');
  Route::get('{slug}/edit', 'ItemController@edit');
  Route::put('/{slug}', 'ItemController@update');
  Route::delete('/{slug}', 'ItemController@destroy');
  //My Routes
  Route::get('/historial', 'ItemController@historial');
  Route::patch('/{slug}/activate', 'ItemController@activate');
  Route::patch('/{slug}/deactivate', 'ItemController@deactivate');
  Route::get('/{slug}/preview', 'ItemController@preview');
});

/// NPC routes ///
Route::prefix('npc')->group(function () {
  Route::get('/', 'NpcController@index');
  Route::get('/{slug}', 'NpcController@show');
});
/* AuthRoute */
Route::prefix('npc')->group(function () {
  Route::get('/create', 'NpcController@create');
  Route::post('/', 'NpcController@store');
  Route::get('{slug}/edit', 'NpcController@edit');
  Route::put('/{slug}', 'NpcController@update');
  Route::delete('/{slug}', 'NpcController@destroy');
  //My Routes
  Route::get('/historial', 'NpcController@historial');
  Route::patch('/{slug}/activate', 'NpcController@activate');
  Route::patch('/{slug}/deactivate', 'NpcController@deactivate');
  Route::get('/{slug}/preview', 'NpcController@preview');
});

/// Rarity routes ///
Route::prefix('rarity')->group(function () {
  Route::get('/', 'RarityController@index');
  Route::get('/{slug}', 'RarityController@show');
});
/* AuthRoute */
Route::prefix('rarity')->group(function () {
  Route::get('/create', 'RarityController@create');
  Route::post('/', 'RarityController@store');
  Route::get('{slug}/edit', 'RarityController@edit');
  Route::put('/{slug}', 'RarityController@update');
  Route::delete('/{slug}', 'RarityController@destroy');
  //My Routes
  Route::get('/historial', 'RarityController@historial');
  Route::patch('/{slug}/activate', 'RarityController@activate');
  Route::patch('/{slug}/deactivate', 'RarityController@deactivate');
  Route::get('/{slug}/preview', 'RarityController@preview');
});

/// Skill routes ///
Route::prefix('skill')->group(function () {
  Route::get('/', 'SkillController@index');
  Route::get('/{slug}', 'SkillController@show');
});
/* AuthRoute */
Route::prefix('skill')->group(function () {
  Route::get('/create', 'SkillController@create');
  Route::post('/', 'SkillController@store');
  Route::get('{slug}/edit', 'SkillController@edit');
  Route::put('/{slug}', 'SkillController@update');
  Route::delete('/{slug}', 'SkillController@destroy');
  //My Routes
  Route::get('/historial', 'SkillController@historial');
  Route::patch('/{slug}/activate', 'SkillController@activate');
  Route::patch('/{slug}/deactivate', 'SkillController@deactivate');
  Route::get('/{slug}/preview', 'SkillController@preview');
});

/// Stat routes ///
Route::prefix('stat')->group(function () {
  Route::get('/', 'StatController@index');
  Route::get('/{slug}', 'StatController@show');
});
/* AuthRoute */
Route::prefix('stat')->group(function () {
  Route::get('/create', 'StatController@create');
  Route::post('/', 'StatController@store');
  Route::get('{slug}/edit', 'StatController@edit');
  Route::put('/{slug}', 'StatController@update');
  Route::delete('/{slug}', 'StatController@destroy');
  //My Routes
  Route::get('/historial', 'StatController@historial');
  Route::patch('/{slug}/activate', 'StatController@activate');
  Route::patch('/{slug}/deactivate', 'StatController@deactivate');
  Route::get('/{slug}/preview', 'StatController@preview');
});

/// Weapon routes ///
Route::prefix('weapon')->group(function () {
  Route::get('/', 'WeaponController@index');
  Route::get('/{slug}', 'WeaponController@show');
});
/* AuthRoute */
Route::prefix('weapon')->group(function () {
  Route::get('/create', 'WeaponController@create');
  Route::post('/', 'WeaponController@store');
  Route::get('{slug}/edit', 'WeaponController@edit');
  Route::put('/{slug}', 'WeaponController@update');
  Route::delete('/{slug}', 'WeaponController@destroy');
  //My Routes
  Route::get('/historial', 'WeaponController@historial');
  Route::patch('/{slug}/activate', 'WeaponController@activate');
  Route::patch('/{slug}/deactivate', 'WeaponController@deactivate');
  Route::get('/{slug}/preview', 'WeaponController@preview');
});