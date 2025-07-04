@php
    $classes = 'p-4 bg-white/10 rounded-xl text-center border border-transparent hover:border-blue-800 group';
@endphp

<div {{ $attributes->merge(['class' => $classes]) }}>
    {{ $slot }}
</div>
