<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;

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

Route::get('/', [ContactController::class, 'index']);
Route::post('/confirm', [ContactController::class, 'confirm']);
Route::post('/thanks', [ContactController::class, 'store']);
Route::post('/register', [ContactController::class, 'register']);
/* テスト確認用 */
Route::get('/register', [ContactController::class, 'register']);
/* テスト確認用 */
Route::get('/login', [ContactController::class, 'login']);
Route::post('/login', [ContactController::class, 'login']);

/* テスト確認用 */
Route::get('/admin', [ContactController::class, 'admin']);
Route::post('/admin', [ContactController::class, 'admin']);

Route::post('/Registration', [ContactController::class, 'registration']);

