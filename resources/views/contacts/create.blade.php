@php use function Laravel\Prompts\error; @endphp
@extends('layout.app')
@section('content')
    <div class="mx-auto max-w-screen-xl px-4 py-16 mt-24 sm:px-6 lg:px-8">
        <div class="mx-auto max-w-lg">
            <h2 class="text-2xl">Create Contact</h2>

            <form action="{{ route('contacts.store') }}" method="POST" class="mb-0 mt-6 space-y-4 border rounded-lg p-4 shadow-lg sm:p-6 lg:p-8">
                @csrf
                <x-input label="First Name" name="firstName" value="{{ old('firstName') }}"></x-input>
                <x-input label="Last Name" name="lastName" value="{{ old('lastName') }}"></x-input>
                <x-input label="Email" name="email" value="{{ old('email') }}"></x-input>
                <x-input label="Phone" name="phone" value="{{ old('phone') }}"></x-input>

                <x-submit-btn text="Create Contact"></x-submit-btn>
            </form>

        </div>
    </div>
@endsection



