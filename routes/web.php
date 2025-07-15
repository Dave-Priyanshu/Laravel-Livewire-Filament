<?php

use App\Livewire\ShowArticales;
use App\Livewire\ShowHome;
use App\Livewire\ShowMembers;
use App\Livewire\ShowService;
use App\Livewire\ShowServicePage;
use Illuminate\Support\Facades\Route;

Route::get('/',ShowHome::class)->name('home');

// Services Page Route
Route::get('/services',ShowServicePage::class)->name('servicesPage');
Route::get('/services/{id}',ShowService::class)->name('serviceDetailPage');

// Members Page Route
Route::get('/team',ShowMembers::class)->name('membersPage');

// Articale Page Route
Route::get('/articale',ShowArticales::class)->name('articalePage');


