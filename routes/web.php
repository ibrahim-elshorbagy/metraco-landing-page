<?php

use Illuminate\Support\Facades\Route;
use App\Livewire\Home;
use App\Livewire\About;
use App\Livewire\Services;
use App\Livewire\Contact;
use App\Livewire\GovernmentRelations;

Route::get('/', Home::class)->name('home');
Route::get('/about', About::class)->name('about');
Route::get('/business-units', Services::class)->name('business-units');
Route::get('/government-relations', GovernmentRelations::class)->name('government-relations');
Route::get('/contact', Contact::class)->name('contact');

Route::redirect('/services', '/business-units');
Route::redirect('/markets', '/government-relations');
