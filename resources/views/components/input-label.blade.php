@props(['value'])

<label {{ $attributes->merge(['class' => 'block font-medium text-sm text-slate-950']) }}>
    {{ $value ?? $slot }}
</label>
