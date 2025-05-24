<?php

use App\Http\Controllers\MessageController;
use App\Http\Controllers\StatusController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\HomeController;

Route::get('/', [HomeController::class, 'index'])->name('home');

// Authentication Routes
Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');
Route::post('/login', [AuthController::class, 'login']);
Route::get('/register', [AuthController::class, 'showRegisterForm'])->name('register');
Route::post('/register', [AuthController::class, 'register']);
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');
// Static Pages
Route::get('/about', function () {
    return view('pages.about');
})->name('about');

Route::get('/contact', function () {
    return view('pages.contact');
})->name('contact');

Route::get('/terms', function () {
    return view('pages.terms');
})->name('terms');

Route::get('/privacy', function () {
    return view('pages.privacy');
})->name('privacy');

Route::get('/writing-tips', function () {
    return view('pages.writing-tips');
})->name('writing.tips');

// Added new static pages
Route::get('/customers', function () {
    return view('pages.customers');
})->name('customers');

Route::get('/features', function () {
    return view('pages.features');
})->name('features');

Route::get('/careers', function () {
    return view('pages.careers');
})->name('careers');

Route::get('/blog-page', function () {
    return view('pages.blog');
})->name('blog-page');

Route::get('/changelog', function () {
    return view('pages.changelog');
})->name('changelog');

// Help Center routes
Route::get('/help-center', function () {
    return view('pages.help-center');
})->name('help-center');

Route::get('/help-center/search', function () {
    return view('pages.help-center', ['query' => request('query')]);
})->name('help-center.search');

Route::get('/documentation', function () {
    return view('pages.documentation');
})->name('documentation');

Route::get('/status', function () {
    return view('pages.status');
})->name('status');
Route::post('/contact', [MessageController::class, 'store'])->name('contact.submit');

// Protected Routes
Route::middleware('auth')->group(function () {
    Route::get('/dashboard', [AuthController::class, 'dashboard'])->name('dashboard');

    // Change password routes
    Route::get('/change-password', [AuthController::class, 'showChangePasswordForm'])->name('password.change');
    Route::post('/change-password', [AuthController::class, 'changePassword'])->name('password.update');

    // Blog post management routes (protected)
    Route::get('/blog/create', [BlogController::class, 'create'])->name('blog.create');
    Route::post('/blog', [BlogController::class, 'store'])->name('blog.store');
    Route::get('/blog/{id}/edit', [BlogController::class, 'edit'])->name('blog.edit');
    Route::put('/blog/{id}', [BlogController::class, 'update'])->name('blog.update');
    Route::delete('/blog/{id}', [BlogController::class, 'destroy'])->name('blog.destroy');

    // Comment routes
    Route::post('/blog/{post}/comment', [BlogController::class, 'storeComment'])->name('blog.comment');

    // Like/dislike routes
    Route::post('/blog/like/{id}', [BlogController::class, 'like'])->name('blog.like');
});

// Admin Routes
Route::middleware(['auth', 'admin'])->prefix('admin')->group(function () {
    Route::get('/dashboard', [AdminController::class, 'dashboard'])->name('admin.dashboard');
    // User management routes
    Route::get('/users', [AdminController::class, 'users'])->name('admin.users');
    Route::get('/users/{id}', [AdminController::class, 'showUser'])->name('admin.users.show');
    Route::get('/users/{id}/edit', [AdminController::class, 'editUser'])->name('admin.users.edit');
    Route::put('/users/{id}', [AdminController::class, 'updateUser'])->name('admin.users.update');
    Route::get('/posts', [AdminController::class, 'posts'])->name('admin.posts');

    // Messages routes
    Route::get('/messages', [MessageController::class, 'index'])->name('admin.messages');
    Route::post('/messages/{id}/mark-read', [MessageController::class, 'markAsRead'])->name('admin.messages.mark-read');
});

// Public blog routes
Route::get('/blog', [BlogController::class, 'index'])->name('blog.index');
Route::get('/blog/{slug}', [BlogController::class, 'show'])->name('blog.show');

//status route
Route::get('/statuses', [StatusController::class, 'adminIndex'])->name('admin.statuses.index');
Route::get('/statuses/{id}/edit', [StatusController::class, 'edit'])->name('admin.statuses.edit');
Route::put('/statuses/{id}', [StatusController::class, 'update'])->name('admin.statuses.update');
Route::get('/test-css', function () {
    $path = base_path('vendor/laravel/framework/src/Illuminate/Foundation/resources/exceptions/renderer/dist/styles.css');

    if (!file_exists($path)) {
        return "File not found!";
    }

    return file_get_contents($path);
});
