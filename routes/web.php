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

// アクション一覧画面を表示
Route::get('/', [IssueController::class,'showList'])->name('lists');

// 課題詳細画面を表示
Route::get('/issue/{id}', [IssueController::class,'showDetail'])->name('show');