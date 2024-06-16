<?php

namespace App\Http\Controllers\Contacts;

use App\Http\Controllers\Controller;
use App\Models\Contact;

class EditContactsController extends Controller
{
    public function __invoke(Contact $contact)
    {
        return view('contacts.edit', [
            'contact' => $contact
        ]);
    }
}
