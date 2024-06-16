<?php

namespace App\Http\Controllers\Contacts;

use App\Http\Controllers\Controller;

class CreateContactsController extends Controller
{
    public function __invoke()
    {
        return view('contacts.create');
    }
}
