<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/welcome', function () {
    return view('welcome');
});
Route::get('/apps', function () {
    return view('apps');
});
Route::get('/admin', function () {
    return view('back.dashboard');
});


// front end
Route::get('/ceo', [App\Http\Controllers\CEOController::class, 'index'])->name('ceo');
Route::get('/help', [App\Http\Controllers\HelpController::class, 'index'])->name('help');
Route::post('/help-support-store', [App\Http\Controllers\HelpController::class, 'store'])->name('help-support-store');
Route::post('/payment', [App\Http\Controllers\HelpController::class, 'payment'])->name('payment');



// backend
Route::get('/back-help', [App\Http\Controllers\HelpController::class, 'main'])->name('main');
Route::get('/createForm', [App\Http\Controllers\HelpController::class, 'createForm'])->name('createForm');
Route::get('/support-list', [App\Http\Controllers\HelpController::class, 'supportList'])->name('supportList');
Route::get('/support-requets', [App\Http\Controllers\HelpController::class, 'supportRequets'])->name('supportRequets');
Route::get('/support-inbox', [App\Http\Controllers\HelpController::class, 'supportInbox'])->name('supportInbox');


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');



// APIS



use Illuminate\Http\Request;

Route::get('/api-demo', function (Request $request) {
    return response()->json([
        'project' => 'Imported from GitHub',
        'learning' => 'APIs',
        'status' => 'working'
        
    ]);
});

Route::post('/api-demo-post', function (Request $request) {
    return response()->json([
        'received' => $request->all()
    ]);
});

