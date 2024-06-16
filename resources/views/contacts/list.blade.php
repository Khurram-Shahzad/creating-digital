@extends('layout.app')
@section('content')
    @if ($contacts->count())
        <div class="mt-24 w-5/6 mx-auto rounded-lg border border-gray-200 p-10">
            <x-alerts.success></x-alerts.success>
            <h2 class="text-2xl mb-8">Contacts List</h2>
            <table class="min-w-full divide-y-2 divide-gray-200 bg-white text-left">
                <thead>
                    <tr>
                        <x-table.header header="Actions"></x-table.header>
                        <x-table.header header="First Name"></x-table.header>
                        <x-table.header header="Last Name"></x-table.header>
                        <x-table.header header="Phone"></x-table.header>
                        <x-table.header header="Email"></x-table.header>
                    </tr>
                </thead>

                <tbody class="divide-y divide-gray-200">
                    @foreach($contacts as $contact)
                        <tr>
                            <td class="whitespace-nowrap px-4 py-5 font-medium text-gray-900">
                                @include('contacts.partials.delete-contact')
                                <x-link route="{{ route('contacts.edit', ['contact' => $contact->id]) }}" label="Edit"></x-link>
                            </td>
                            <x-table.data value="{{ $contact->first_name }}"></x-table.data>
                            <x-table.data value="{{ $contact->last_name }}"></x-table.data>
                            <x-table.data value="{{ $contact->phone }}"></x-table.data>
                            <x-table.data value="{{ $contact->email }}"></x-table.data>
                        </tr>
                    @endforeach
                </tbody>
            </table>

        </div>
        <div class="text-center mt-5">
            <x-link-btn label="Add New" route="{{ route('contacts.create') }}"></x-link-btn>
        </div>
    @else
        <x-alerts.info message="No contacts found. Please create a new contact"></x-alerts.info>
        <x-link-btn route="{{ route('contacts.create') }}" label="Create New Contact"></x-link-btn>
    @endif
@endsection

