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
Route::get('/about', 'HomeController@about')->name('about');
Route::get('/faq','HomeController@faq')->name('faq');

/// Ammo routes ///
// ** Route::resource('ammo', 'AmmoController');
// Ammo *** Non-AuthRoute
Route::prefix('ammo')->group(function () {
    Route::get('/', 'AmmoController@index');
    Route::get('/{slug}', 'AmmoController@show');
    //Verb      - URI                - Action  - Route Name
    //GET       - /ammos             - index   - route('ammos.index')
    //GET       - /ammos/{ammo}      - show    - route('ammos.show')
});
// Ammo *** AuthRoute
Route::prefix('ammo')->group(function () {
    //Verb      - URI                - Action  - Route Name
    //GET       - /ammos/create      - create  - route('ammos.create')
    //POST      - /ammos             - store   - route('ammos.store')
    //GET       - /ammos/{ammo}/edit - edit    - route('ammos.edit')
    //PUT/PATCH - /ammos/{ammo}      - update  - route('ammos.update')
    //DELETE    - /ammos/{ammo}      - destroy - route('ammos.destroy')
    Route::get('/create', 'AmmoController@create');
    Route::post('/', 'AmmoController@store');
    Route::get('{slug}/edit', 'AmmoController@edit');
    Route::put('/{slug}', 'AmmoController@update');
    Route::delete('/{slug}', 'AmmoController@destroy');
    //My Routes
    Route::get('/historial', 'AmmoController@historial');
    Route::patch('/{slug}/activate', 'AmmoController@activate');
    Route::patch('/{slug}/deactivate', 'AmmoController@deactivate');
    Route::get('/{slug}/preview', 'AmmoController@preview');
})->middleware('auth');

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
})->middleware('auth');

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
})->middleware('auth');

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
})->middleware('auth');

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
})->middleware('auth');

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
})->middleware('auth');

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
})->middleware('auth');

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
})->middleware('auth');