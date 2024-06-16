<?php

namespace App\Http\Controllers\Contacts;

use App\Http\Controllers\Controller;
use App\Models\Contact;

class DeleteContactsController extends Controller
{
    public function __invoke(Contact $contact)
    {
        $message = sprintf('%s %s (%s) deleted successfully', $contact->first_name, $contact->last_name, $contact->email);

        $contact->delete();

        return redirect()
            ->route('contacts.list')
            ->withSuccess($message);
    }
}
