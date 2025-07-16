<?php

use App\Livewire\ArticaleDetail;
use App\Livewire\Faq;
use App\Livewire\ShowArticales;
use App\Livewire\ShowFaq;
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
Route::get('/articale/{id}',ArticaleDetail::class)->name('articaleDetail');

// FAQ Page route
Route::get('/faqs',ShowFaq::class)->name('faqPage');

