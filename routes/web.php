<?php

use App\Http\Controllers\Contacts\CreateContactsController;
use App\Http\Controllers\Contacts\DeleteContactsController;
use App\Http\Controllers\Contacts\EditContactsController;
use App\Http\Controllers\Contacts\ListContactsController;
use App\Http\Controllers\Contacts\StoreContactsController;
use App\Http\Controllers\Contacts\UpdateContactsController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return redirect()->route('contacts.list');
});

Route::prefix('contacts')->group(function () {
    Route::get('/', ListContactsController::class)->name('contacts.list');
    Route::get('/create', CreateContactsController::class)->name('contacts.create');
    Route::post('/', StoreContactsController::class)->name('contacts.store');
    Route::get('/{contact}/edit', EditContactsController::class)->name('contacts.edit');
    Route::patch('{contact}', UpdateContactsController::class)->name('contacts.update');
    Route::delete('/{contact}', DeleteContactsController::class)->name('contacts.delete');
});

