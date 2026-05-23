<?php

use App\Models\Job;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\JobController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\SessionController;
use App\Jobs\TranslateJob;
use App\Mail\JobPosted;
use Illuminate\Http\Request as HttpRequest;
use Illuminate\Support\Facades\Mail;

Route::get('test', function () {
    $job = Job::first();
    TranslateJob::dispatch($job);
    return 'done';
});
Route::view('/', 'home');
Route::view('/contact', 'contact');

Route::controller(JobController::class)->group(function () {
    Route::get('/jobs', 'index');
    Route::get('/job/create', 'create');
    Route::get('/job/{job}', 'show')->name('job.show');
    Route::post('/jobs', 'store')->middleware('auth');
    Route::get('/job/{job}/edit', 'edit')->middleware(['auth'])->can('edit', 'job');
    Route::patch('/job/{job}',  'update');
    Route::delete('/job/{job}',  'destroy');
});


Route::get('/register', [RegisterController::class, 'create']);
Route::post('/register', [RegisterController::class, 'store']);
Route::get('/login', [SessionController::class, 'create']);
Route::post('/login', [SessionController::class, 'store'])->name('login');
Route::post('/logout', [SessionController::class, 'destroy']);


Route::get('array', function () {
    $user = [
        'name' => 'Kasim',
        'role' => 'Admin'
    ];

    return view('array', compact('user'));
});

Route::get('lay', function () {
    return view('practice.home');
});

Route::get('/unsubscribe/{user}', function (HttpRequest $request, $user) {

    if (! $request->hasValidSignature()) {
        abort(403, 'Invalid or tampered URL.');
    }

    return "User {$user} unsubscribed!";
})->name('unsubscribe');

Route::get('ses', function (HttpRequest $request) {
    // Via a request instance...
    $request->session()->put('name', 'This from session');
    $data = session('name');

    return $data;
});
