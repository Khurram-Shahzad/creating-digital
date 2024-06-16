@props(['message'])
<div role="alert" class="rounded border-s-4 border-blue-500 bg-blue-50 p-4 my-5">
    <strong class="block font-medium text-blue-800"> info </strong>

    <p class="mt-2 text-sm text-blue-700">
        {{ $message }}
    </p>
</div>
