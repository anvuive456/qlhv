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
    return view('login');
});

Route::post('/login', function (Request $request) {
    $validator = $request->validate([
        'type' => 'required',
        'username' => 'required',
        'password' => 'required'
    ]);
    if (!$validator) {
        return redirect('/');
    }

    $canGo = Auth::guard($validator['type'])->attempt($request->only(['username', 'password']));

    if ($canGo) return redirect()->route($validator['type'] . '.home');
    else {
        return redirect('/');
    }
});

Route::prefix('admin')->group(function () {
    Route::get('/home', function () {
        $students = \App\Models\Student::query()->get();
        $teachers = \App\Models\Teacher::query()->selectRaw('teacher.id, teacher.full_name, classroom.title')->leftJoin('classroom', 'teacher.id', '=', 'classroom.teacher_id')->get();
        $classrooms = \App\Models\Classroom::query()->get();

        return view('admin.home', [
            'students' => $students,
            'teachers' => $teachers,
            'classrooms' => $classrooms
        ]);
    })->name('admin.home');
});

Route::prefix('teacher')->group(function () {
    Route::get('/home', function () {

    })->name('teacher.home');
});

Route::prefix('student')->group(function () {
    Route::get('/home', function () {

    })->name('student.home');
});
