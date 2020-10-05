<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\IssueController;

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

// 課題登録画面を表示
Route::get('/', [IssueController::class,'showCreate'])->name('create');

// アクション一覧画面を表示
Route::get('/issue/lists', [IssueController::class,'showList'])->name('lists');

// 課題登録
Route::post('/issue/store', [IssueController::class,'exeStore'])->name('store');

// 課題詳細画面を表示
Route::get('/issue/{id}', [IssueController::class,'showDetail'])->name('show');

// 課題編集画面を表示
Route::get('/issue/edit/{id}', [IssueController::class,'showEdit'])->name('edit');

// 課題更新
Route::post('/issue/update', [IssueController::class,'exeUpdate'])->name('update');

// 課題削除
Route::post('/issue/delete/{id}', [IssueController::class,'exeDelete'])->name('delete');