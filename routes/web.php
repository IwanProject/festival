<?php

use App\Models\Item;
use App\Models\Pajak;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ItemController;
use App\Http\Controllers\PajakController;

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
    return view('items.index',['title' => 'Items', 'item' => Item::all(), 'pajak' => Pajak::all()]);
});



Route::resource('project/items', ItemController::class);
Route::resource('project/pajak', PajakController::class);
