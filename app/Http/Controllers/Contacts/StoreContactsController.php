<?php

namespace App\Http\Controllers\Contacts;

use App\Http\Controllers\Controller;
use App\Http\Requests\CreateContactRequest;
use App\Models\Contact;

class StoreContactsController extends Controller
{
    public function __invoke(CreateContactRequest $request)
    {
        $contact = Contact::create([
            'first_name' => $request->firstName,
            'last_name' => $request->lastName,
            'email' => $request->email,
            'phone' => $request->phone,
        ]);

        $message = sprintf('%s %s (%s) created successfully', $contact->first_name, $contact->last_name, $contact->email);

        return redirect()
            ->route('contacts.list')
            ->withSuccess($message);
    }
}
