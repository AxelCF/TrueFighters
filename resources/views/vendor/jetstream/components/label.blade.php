@props(['value'])

<label {{ $attributes->merge(['class' => 'block font-medium text-sm text-white']) }}>
    {{ $value ?? $slot }}
</label>
{{-- modification de la couleur des textes de connexion --}}