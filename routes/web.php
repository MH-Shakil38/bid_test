<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Frontend\HomeController;
use App\Http\Controllers\backend\BasicController;
use App\Http\Controllers\backend\CategoryController;
use App\Http\Controllers\backend\NotificationController;
use App\Http\Controllers\backend\CommissionController;
use App\Http\Controllers\backend\UserController;
use App\Http\Controllers\backend\ProjectController;
use App\Http\Controllers\BidController;
use App\Http\Controllers\backend\OwnerController;
use App\Http\Controllers\backend\BidderController;

/**frontend*/
Route::get('/', [HomeController::class, 'home'])->name('home');
Route::get('/listing', [HomeController::class, 'listing'])->name('listing');
Route::get('/project-details/{id}', [HomeController::class, 'projectDetails'])->name('project.details');
Route::get('/project-bid/{projectId}', [HomeController::class, 'projectBid'])->name('project.bid');
Route::get('/find', [HomeController::class, 'findProject'])->name('find.project');

/**backend*/


Route::get('/dashboard',[BasicController::class,'dashboard'])->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {

    /**owner route*/
    Route::group(['prefix' => 'owner'], function () {
        Route::get('/dashboard', [OwnerController::class, 'dashboard'])->name('owner.dashboard');
        Route::get('/active-project', [OwnerController::class, 'activeProject'])->name('owner.active.project');
        Route::get('/pending-project', [OwnerController::class, 'pendingProject'])->name('owner.pending.project');
        Route::get('/rejected-project', [OwnerController::class, 'rejectedProject'])->name('owner.rejected.project');
    });


    /**bidder route*/
    Route::group(['prefix' => 'bidder'], function () {
        Route::get('/dashboard', [BidderController::class, 'dashboard'])->name('bidder.dashboard');
        Route::get('/bid-on-project', [BidderController::class, 'bidOnProject'])->name('bidder.bid-on-project');
        Route::get('/active-project', [BidderController::class, 'activeProject'])->name('bidder.active-project');
        Route::get('/complete-project', [BidderController::class, 'completeProject'])->name('bidder.complete-project');
    });


    /**page/menu route*/
    /**bidder route*/
    Route::group(['prefix' => 'bidder'], function () {
        Route::get('/total-project', [ProjectController::class, 'totalProject'])->name('total-project');
        Route::get('/total-bids', [BasicController::class, 'totalBids'])->name('total-bids');
        Route::get('/total-bidders', [BasicController::class, 'totalBidders'])->name('total-bidders');
        Route::get('/home-owners', [BasicController::class, 'homeOwners'])->name('home-owners');
        Route::get('/staff', [UserController::class, 'staff'])->name('staff');
        Route::resource('/categories', CategoryController::class);
        Route::resource('/commission', CommissionController::class);
        Route::resource('/notifications', NotificationController::class);
        Route::resource('/users', UserController::class);
        Route::get('/staff', [UserController::class, 'staff'])->name('staff');
    });

    Route::get('/job-post', [HomeController::class, 'jobPost'])->name('job.post');
    Route::get('/view-project-details/{id}', [ProjectController::class, 'viewProjectDetails'])->name('view.project-details');
    Route::resource('/projects', ProjectController::class);
    Route::post('bid-project-store', [BidController::class, 'bidProjectStore'])->name('bid-project-store');


    /**profile*/
    // routes/web.php
    Route::post('/change-profile-picture', [ProfileController::class, 'uploadProfileImage'])->name('change.profile.picture');
    Route::get('/profile', [ProfileController::class, 'profile'])->name('profile');
    Route::get('/profile/edit', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::PUT('/password/update', [ProfileController::class, 'passwordUpdate'])->name('update.password');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';
