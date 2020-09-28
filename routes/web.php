<?php

use Illuminate\Support\Facades\Route;
use App\HTTP\Controllers\IssueController;

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

// 課題一覧画面を表示
Route::get('/', [IssueController::class,'showList'])->name('lists');