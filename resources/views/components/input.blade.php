@props(['label', 'name', 'value', 'type'])
<div class="input-text-container">
    <label for="{{ $name ?? null }}">{{ $label }}</label>
    <input
        type="text"
        name="{{$name}}"
        id="{{$name}}"
        value="{{$value}}"
        class="w-full rounded-lg border border-gray-200 p-4 pe-12 text-sm shadow-sm"
    />
    @if ($errors->has($name))
        <span class="text-sm text-red-400"> {{ $errors->first($name) }}</span>
    @endif
</div>




