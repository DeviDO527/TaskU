<?php
use Illuminate\Support\Facades\Route;
use Illuminate\Foundation\Auth\EmailVerificationRequest;
use Illuminate\Http\Request;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\userController;
use App\Http\Controllers\TaskController;

Route::get('/', [HomeController::class, 'index']);
Route::get('/welcome', [HomeController::class, 'welcome']);
Route::get('/login', [userController::class, 'showLogin'])->middleware('guest')->name('login');
Route::get('/signup', [userController::class, 'showRegister'])->middleware('guest');
Route::post('/create', [userController::class, 'createUser']);
Route::get('/test-email-verify', function(){
    return view('auth.verify-email');
});

//Vista que indica al usuario que debe verificar su correo
Route::get('/email/verify', function () {
    return view('auth.verify-email');
})->middleware('auth')->name('verification.notice');

//Ruta que procesa la verificación del enlace
Route::get('/email/verify/{id}/{hash}', function (EmailVerificationRequest $request) {
    $request->fulfill(); // Marca como verificado
    return redirect('/login'); // Redirige al login después de verificar
})->middleware(['auth', 'signed'])->name('verification.verify');


Route::post('/email/verification-notification', function (Request $request) {
    $request->user()->sendEmailVerificationNotification();
    return back()->with('message', 'Verification link sent!');
})->middleware(['auth', 'throttle:6,1'])->name('verification.send');

Route::post('/loginUser', [userController::class, 'login'])->name('loginUser')->middleware('guest');
Route::get('/dashboard', [TaskController::class, 'getTasks'])->middleware('auth')->name('dashboard');
Route::post('/logout', [userController::class, 'logout'])->name('logout')->middleware('auth');
Route::get('/tasks', function(){
    return view('createTask'); // Assuming you have a view for creating tasks
})->middleware('auth');

Route::post('/tasks/create', [TaskController::class, 'createTask'])->middleware('auth');
