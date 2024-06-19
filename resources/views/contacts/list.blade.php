@extends('layout.app')
@section('content')
    @if ($contacts->count())
        <div class="mt-24 w-5/6 mx-auto rounded-lg border border-gray-200 p-10">
            <x-alerts.success></x-alerts.success>
            <h2 class="text-2xl mb-8">Contacts List</h2>

            <div class="container mx-auto">
                <div class="grid grid-cols-5 gap-4 bg-gray-300 p-5 border">
                    <div>Actions</div>
                    <div>First Name</div>
                    <div>Last Name</div>
                    <div>Phone</div>
                    <div>Email</div>
                </div>

                @foreach($contacts as $contact)
                    <div class="grid grid-cols-5 gap-4 my-3 p-5">
                        <div class="whitespace-nowrap font-medium text-gray-900">
                            @include('contacts.partials.delete-contact')
                            <x-link route="{{ route('contacts.edit', ['contact' => $contact->id]) }}" label="Edit"></x-link>
                        </div>
                        <div class="truncate"> {{ $contact->first_name }}</div>
                        <div class="truncate"> {{ $contact->last_name }}</div>
                        <div class="truncate"> {{ $contact->phone }}</div>
                        <div class="truncate"> {{ $contact->email }}</div>

                    </div>
                @endforeach
            </div>
        </div>
        <div class="text-center mt-5">
            <x-link-btn label="Add New" route="{{ route('contacts.create') }}"></x-link-btn>
        </div>
    @else
        <x-alerts.info message="No contacts found. Please create a new contact"></x-alerts.info>
        <x-link-btn route="{{ route('contacts.create') }}" label="Create New Contact"></x-link-btn>
    @endif
@endsection

