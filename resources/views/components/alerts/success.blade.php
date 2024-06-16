@if (session('success'))
    <div role="alert" class="rounded border-s-4 border-green-500 bg-green-50 p-4 my-5">
        <strong class="block font-medium text-green-800"> Success </strong>

        <p class="mt-2 text-sm text-green-700">
            {{ session('success') }}
        </p>
    </div>
@endif
