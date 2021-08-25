<?php

use App\Events\MessageCreated;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ArticleController;
use App\Http\Livewire\Personalization\PersonalizationEdit;

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

Route::get('/', function () {
    return view('welcome');
});

Route::group(['middleware' => ['auth']], function () {

    Route::get('/dashboard', function () {
        return view('dashboard');})->name('dashboard');

    Route::resource('articles', ArticleController::class);

    Route::get('/calendar', function () {
        return view('calendar');})->name('calendar');

    Route::get('/users', function () {
        return view('users');})->name('users');

    Route::get('/divisions', App\Http\Livewire\Division\Divisions::class)->name('divisions');

    Route::get('/announcements', App\Http\Livewire\Announcement\Announcements::class)->name('announcements');

    Route::get('/schedules', App\Http\Livewire\Schedule\Schedules::class)->name('schedules');

    Route::get('/projects', App\Http\Livewire\Project\Projects::class)->name('projects');

    Route::get('/categories', App\Http\Livewire\Category\ListCategory::class)->name('categories');
    Route::get('/tags', App\Http\Livewire\Tag\ListTag::class)->name('tags');

    Route::get('/timeline', function () {
        return view('timeline');})->name('timeline');

    Route::get('/update-profile', function () {
        return view('update-profile');})->name('update-profile');

    Route::get('/personalization', [App\Http\Controllers\PersonalizationController::class, 'show'])->name('personalization');
    Route::get('/personalization/edit', PersonalizationEdit::class)->name('personalization.edit');


    Route::get('/chat', function () {
        return view('chat');})->name('chat');

});


Route::middleware(['auth'])->group(function () {
    Route::post('images', [App\Http\Controllers\ImageController::class, 'store'])->name('images.store');
    Route::post('upload/store', [App\Http\Controllers\FilepondController::class, 'store'])->name('upload.store');
    Route::get('upload/show', [App\Http\Controllers\FilepondController::class, 'show'])->name('upload.show');
});

require __DIR__.'/auth.php';
