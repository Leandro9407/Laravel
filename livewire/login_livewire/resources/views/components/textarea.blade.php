@props(['class' => ''])

<textarea {{ $attributes->merge(['class' => $class]) }}>
    {{ $slot }}
</textarea>
