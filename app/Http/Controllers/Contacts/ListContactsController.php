<?php

namespace App\Http\Controllers\Contacts;

use App\Http\Controllers\Controller;
use App\Models\Contact;

class ListContactsController extends Controller
{
    public function __invoke()
    {
        return view('contacts.list', [
            'contacts' => Contact::all()
        ]);
    }
}
