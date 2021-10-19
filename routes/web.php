<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ArticleController;

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

    Route::get('/dashboard', App\Http\Livewire\Dashboard\Overview::class)->name('dashboard');
    Route::get('/timeline', App\Http\Livewire\Dashboard\Timeline::class)->name('timeline');

    Route::resource('articles', ArticleController::class);

    Route::get('/calendar', App\Http\Livewire\Schedule\Schedules::class)->name('calendar');

    Route::get('/users', App\Http\Livewire\User\UsersList::class)->name('users');

    Route::get('/divisions', App\Http\Livewire\Division\Divisions::class)->name('divisions');
    Route::get('/division/{division}', App\Http\Livewire\Division\DivisionShow::class)->name('division.show');
    Route::get('/division/{division:name}/edit', App\Http\Livewire\Division\DivisionEdit::class)->name('division.edit');

    Route::get('/announcements', App\Http\Livewire\Announcement\Announcements::class)->name('announcements');
    Route::get('/announcements/{announcement}', App\Http\Livewire\Announcement\ShowAnnouncement::class)->name('announcements.show');

    Route::get('/schedules', App\Http\Livewire\Schedule\Schedules::class)->name('schedules');

    Route::get('/projects', App\Http\Livewire\Project\Projects::class)->name('projects');
    Route::get('/projects/{project}', App\Http\Livewire\Project\ProjectShow::class)->name('projects.show');

    Route::get('/categories', App\Http\Livewire\Category\ListCategory::class)->name('categories');
    Route::get('/tags', App\Http\Livewire\Tag\ListTag::class)->name('tags');


    Route::get('/update-profile', App\Http\Livewire\Profile\Profile::class)->name('update-profile');

    Route::get('/organization', App\Http\Livewire\Organization\OrganizationReview::class)->name('organization');
    Route::get('/organization/edit', App\Http\Livewire\Organization\OrganizationEdit::class)->name('organization.edit');


    Route::get('/chat', App\Http\Livewire\Chat\ChatRoom::class)->name('chat');

});


Route::middleware(['auth'])->group(function () {
    Route::post('images', [App\Http\Controllers\ImageController::class, 'store'])->name('images.store');
    Route::post('upload/store', [App\Http\Controllers\FilepondController::class, 'store'])->name('upload.store');
    Route::get('upload/show', [App\Http\Controllers\FilepondController::class, 'show'])->name('upload.show');
});

// Route::get('/debug-sentry', function () {
//     throw new Exception('My first Sentry error!');
// });

require __DIR__.'/auth.php';
