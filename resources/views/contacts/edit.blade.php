@php use function Laravel\Prompts\error; @endphp
@extends('layout.app')
@section('content')
    <div class="mx-auto max-w-screen-xl px-4 py-16 sm:px-6 lg:px-8">
        <div class="mx-auto max-w-lg">
            <h2 class="text-2xl">Edit Contact</h2>
            @if ($errors->any())
                @foreach($errors->all() as $error)
                    {{ $error }}
                @endforeach
            @endif
            <form action="{{ route('contacts.update', ['contact' => $contact->id]) }}" method="POST" class="mb-0 mt-6 space-y-4 rounded-lg p-4 shadow-lg sm:p-6 lg:p-8">
                @csrf
                @method('PATCH')
                <x-input label="First Name" name="firstName" value="{{ $contact->first_name }}"></x-input>
                <x-input label="Last Name" name="lastName" value="{{ $contact->last_name }}"></x-input>
                <x-input label="Email" name="email" value="{{ $contact->email }}"></x-input>
                <x-input label="Phone" name="phone" value="{{ $contact->phone }}"></x-input>

                <x-submit-btn text="Update Contact"></x-submit-btn>
            </form>

        </div>
    </div>
@endsection



