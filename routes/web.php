<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('home');
});

Route::post('/login', function (Request $request) {
    $validator = $request->validate([
        'type' => 'required',
        'username' => 'required',
        'password' => 'required'
    ]);
    if(!$validator){
      \Illuminate\Support\Facades\Session::flash('fail','Thiếu thông tin đăng nhập');
    }

    $canGo = Auth::guard($validator['type'])->attempt([
        'username'=> $validator['username'],
        'password'=> $validator['password'],
    ]) ;

    if($canGo) return redirect($validator['type'] . '.home');
    else       \Illuminate\Support\Facades\Session::flash('fail','không thể đăng nhập');

});

Route::prefix('admin')->group(function () {
    Route::get('/home',function (){

    })->name('admin.home');
});

Route::prefix('teacher')->group(function () {
    Route::get('/home',function (){

    })->name('teacher.home');
});

Route::prefix('student')->group(function () {
    Route::get('/home',function (){

    })->name('student.home');
});
