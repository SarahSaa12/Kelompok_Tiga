<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SoalController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\NilaiController;
use App\Http\Controllers\ResultController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\TeacherController;

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
    return view('welcome');
});

Route::resource('products', ProductController::class);
// Route::resource('students', StudentController::class)->name('index', 'students');
Route::resource('students', StudentController::class);
Route::resource('teachers', TeacherController::class);
Route::resource('admins', AdminController::class);
Route::resource('results', ResultController::class);

Route::resource('soal', SoalController::class)->name('index', 'soal');



Route::get('/loginAwal', function () {return view('loginAwal');});
Route::get('/kontak', function () {return view('kontak');});

Route::get('/register', [RegisterController::class, 'show'])->name('register.show');
Route::post('/register', [RegisterController::class, 'store'])->name('register.store');

Route::get('/pilihan', function () {return view('pilihan');});
Route::get('/index_siswa', function () {return view('index_siswa');});
Route::get('/index_siswa2', function () {return view('index_siswa2');});

Route::get('/guru', function () {return view('guru');});
Route::get('/siswa', function () {return view('siswa');});

Route::get('/dashboardAdmin', function () {return view('dashboardAdmin');});
Route::get('/dashboardGuru', function () {return view('dashboardGuru');});
Route::get('/dashboardSiswa', function () {return view('dashboardSiswa');});
Route::get('/materi', function () {return view('materi');});

Route::get('/dataSiswa', function () {return view('dataSiswa');});
Route::get('/landingPage', function () {return view('landingPage');});
Route::get('/hardware', function () {return view('hardware');});
Route::get('/capaian', function () {return view('capaian');});
Route::get('/petaKonsep', function () {return view('petaKonsep');});
Route::get('/evaluasi', function () {return view('evaluasi');});

Route::get('/bantuanAdmin', function () {return view('bantuanAdmin');});
Route::get('/bantuanGuru', function () {return view('bantuanGuru');});
Route::get('/bantuanSiswa', function () {return view('bantuanSiswa');});

Route::get('/latihan', function () {return view('latihan');});
// Route::get('/soal', function () {return view('soal');});

Route::get('pdf',[StudentController::class,'exportPDF'])->name('export.pdf');
// Route::get('pdf',[ResultController::class,'exportPDF'])->name('export2.pdf');
