@props(['class' => ''])

<select {{ $attributes->merge(['class' => $class]) }}>
    {{ $slot }}
</select>