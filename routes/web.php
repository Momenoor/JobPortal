<?php

use App\Http\Controllers\JobApplicationController;
use App\Http\Controllers\JobController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ResumeMatcherController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

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

Route::middleware('auth')->group(function () {

    Route::middleware('role:admin,employer')->group( function () {
        Route::resource('jobs', JobController::class);
        Route::patch('applications/{application}/status', [JobApplicationController::class, 'updateStatus'])->name('applications.updateStatus');
        Route::get('applications', [JobApplicationController::class, 'index'])->name('applications.index');
        Route::get('applications/{application}', [JobApplicationController::class, 'show'])->name('applications.show');
    });
    // Admin routes
    Route::group(['prefix' => 'admin', 'middleware' => ['role:admin']], function () {
        Route::get('/', function () {
            return view('admin.dashboard');
        });
        Route::resource('categories', CategoryController::class)->names('admin.categories');
        Route::resource('applications', JobApplicationController::class)->names('admin.applications')->except(['index', 'show']);
        Route::get('users', [ProfileController::class, 'index'])->name('admin.users.index');
        Route::patch('jobs/{job}/status', [JobController::class, 'updateStatus'])->name('jobs.updateStatus');
    });

    // Employer routes
    Route::group(['prefix' => 'employer', 'middleware' => ['role:employer']], function () {
        Route::get('/', function () {
            return view('employer.dashboard');
        });

    });

    // Seeker routes
    Route::group(['prefix' => 'seeker', 'middleware' => ['role:seeker']], function () {
        Route::get('/', function () {
            return view('seeker.dashboard');
        });
        Route::get('jobs', [JobController::class, 'publicIndex'])->name('seeker.jobs.index');
        Route::get('jobs/{job}', [JobController::class, 'publicShow'])->name('seeker.jobs.show');
        Route::post('jobs/{job}/apply', [JobApplicationController::class, 'store'])->name('seeker.jobs.apply');
        Route::post('jobs/{job}/save', [JobController::class, 'save'])->name('seeker.jobs.save');
        Route::post('jobs/{job}/unsave', [JobController::class, 'unsave'])->name('seeker.jobs.unsave');
        Route::get('applications', [JobApplicationController::class, 'index'])->name('seeker.applications.index');
    });


    Route::get('profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::post('profile', [ProfileController::class, 'update'])->name('profile.update');

    Route::get('/chat', function () {
        return view('chatbot.index');
    });
    Route::post('/chat', [App\Http\Controllers\ChatbotController::class, 'chat'])->name('chat');
    Route::get('/matcher', function () {
        return view('matcher.matcher');
    });

    Route::post('/matcher', [ResumeMatcherController::class, 'match'])->name('matcher');

});

// Auth routes
Auth::routes();

// Public routes
Route::get('/', function () {
    return redirect()->route('public.jobs.index');
})->name('main');

Route::get('/home', [\App\Http\Controllers\HomeController::class,'index'])->name('home');

Route::get('/public/jobs', [JobController::class, 'publicIndex'])->name('public.jobs.index');
Route::post('/public/jobs', [JobController::class, 'publicSearch'])->name('public.jobs.search');
Route::get('/public/jobs/search', [JobController::class, 'publicSearch'])->name('public.jobs.search.get');
Route::get('/public/jobs/{job}', [JobController::class, 'publicShow'])->name('public.jobs.show');

