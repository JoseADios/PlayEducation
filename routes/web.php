<?php

use App\Http\Livewire\Estudiantes;
use App\Http\Livewire\Grupos;
use App\Http\Livewire\JuegoASumar;
use Illuminate\Support\Facades\File;

use Illuminate\Support\Facades\Route;

use App\Http\Livewire\Auth\ForgotPassword;
use App\Http\Livewire\Auth\ResetPassword;
use App\Http\Livewire\Auth\SignUp;
use App\Http\Livewire\Auth\Login;
use App\Http\Livewire\Dashboard;
use App\Http\Livewire\Billing;
use App\Http\Livewire\Profile;
use App\Http\Livewire\Tables;
use App\Http\Livewire\StaticSignIn;
use App\Http\Livewire\StaticSignUp;
use App\Http\Livewire\Rtl;

use App\Http\Livewire\LaravelExamples\UserProfile;
use App\Http\Livewire\LaravelExamples\UserManagement;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

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

// Route::get('/a-sumar', function () {
//     return view('livewire.juego-a-sumar');
// })->name('a-sumar');

Route::get('/a-sumar', JuegoASumar::class)->name('a-sumar');

Route::get('/', function () {
    return view('index');
})->name('/');

Route::get('/juegos', function () {
    return view('juegos');
})->name('juegos');

Route::get('/sumar/{any}', function ($any) {
    $path = public_path('sumar/' . $any);

    if (File::exists($path)) {
        return File::get($path);
    }

    abort(404);
})->where('any', '.*');

Route::get('/animales/{any}', function ($any) {
    $path = public_path('animales/' . $any);

    if (File::exists($path)) {
        return File::get($path);
    }

    abort(404);
})->where('any', '.*');

Route::get('/TicTac/{any}', function ($any) {
    $path = public_path('TicTac/' . $any);

    if (File::exists($path)) {
        return File::get($path);
    }

    abort(404);
})->where('any', '.*');



//Route::get('/app/sumar/index.html')->name('suma');

Route::get('/sign-up', SignUp::class)->name('sign-up');
Route::get('/login', Login::class)->name('login');

Route::get('/login/forgot-password', ForgotPassword::class)->name('forgot-password');

Route::get('/reset-password/{id}', ResetPassword::class)->name('reset-password')->middleware('signed');


Route::middleware('auth')->group(function () {
    Route::get('/dashboard', Dashboard::class)->name('dashboard');
    Route::get('/billing', Billing::class)->name('billing');
    Route::get('/profile', Profile::class)->name('profile');
    Route::get('/tables', Tables::class)->name('tables');
    Route::get('/static-sign-in', StaticSignIn::class)->name('sign-in');
    Route::get('/static-sign-up', StaticSignUp::class)->name('static-sign-up');
    Route::get('/rtl', Rtl::class)->name('rtl');
    Route::get('/laravel-user-profile', UserProfile::class)->name('user-profile');
    Route::get('/laravel-user-management', UserManagement::class)->name('user-management');
    Route::get('/grupos', Grupos::class)->name('grupos');
    Route::get('/estudiantes', Estudiantes::class)->name('estudiantes');
});


// estudiantes
Route::middleware(['web'])->group(function () {

    Route::get('/ruta-estudiante', function () {
        return view('juegos');
    })->middleware('auth:estudiante')->name('ruta-estudiante');

    Route::get('login-estudiante', [\App\Http\Controllers\EstudianteAuthController::class, 'showLoginForm'])->middleware('auth.estudiante')->name('login-estudiante');
    Route::post('login-estudiante', [\App\Http\Controllers\EstudianteAuthController::class, 'login']);

    Route::post('/logout-estudiante', [\App\Http\Controllers\EstudianteAuthController::class, 'logout'])->name('logout-estudiante');
});
