<?php

namespace App\Http\Controllers\Contacts;

use App\Http\Controllers\Controller;
use App\Http\Requests\CreateContactRequest;
use App\Http\Requests\UpdateContactRequest;
use App\Models\Contact;

class UpdateContactsController extends Controller
{
    public function __invoke(UpdateContactRequest $request, Contact $contact)
    {
        $contact->first_name = $request->firstName;
        $contact->last_name = $request->lastName;
        $contact->phone = $request->phone;
        $contact->email = $request->email;
        $contact->save();

        $message = sprintf('%s %s (%s) updated successfully', $contact->first_name, $contact->last_name, $contact->email);

        return redirect()
            ->route('contacts.list')
            ->withSuccess($message);
    }
}
