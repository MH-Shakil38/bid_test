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

    Route::get('change-status', [HomeController::class, 'changeStatus'])->name('change.status');
    Route::get('bid-details/{id}', [BidController::class, 'bidDetails'])->name('bid.details');

    /**invoice*/
    Route::get('bid-invoice/{bidId}', [BidController::class, 'bidInvoice'])->name('bid.invoice');

    /**owner route*/
    Route::group(['prefix' => 'owner'], function () {
        Route::get('/dashboard', [OwnerController::class, 'dashboard'])->name('owner.dashboard');
        Route::get('/project/{status}', [OwnerController::class, 'projects'])->name('owner.projects');
    });


    /**bidder route*/
    Route::group(['prefix' => 'bidder'], function () {
        Route::get('/dashboard', [BidderController::class, 'dashboard'])->name('bidder.dashboard');
        Route::get('/bid-details/{id}', [BidderController::class, 'bidDetails'])->name('bidder.bid.details');
        Route::get('/bid-on-project', [BidderController::class, 'bidOnProject'])->name('bidder.bid-on-project');
    });


    /**page/menu route*/
    /**bidder route*/
    Route::group(['prefix' => 'dashboard'], function () {
        Route::get('/total-project', [ProjectController::class, 'index'])->name('total-project');
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
    Route::resource('projects', ProjectController::class);
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
