<?php

use Illuminate\Support\Facades\Route;
use App\Models\Admin;
use App\Livewire\Home;
use App\Livewire\Services;
use App\Livewire\About;
use App\Livewire\TakeApp;
use App\Livewire\Contact;

Route::redirect('/login-redirect', '/login')->name('login');

Route::get('/', Home::class)->name('home');

Route::get('/hizmetler', Services::class)->name('hizmetler');

Route::get('/hakkimizda', About::class)->name('hakkimizda');

Route::get('/iletisim', Contact::class)->name('iletisim');

Route::get('/randevu', TakeApp::class)->name('randevu');

Route::get('/test', function () {
    dd(Admin::first()->type);
});

