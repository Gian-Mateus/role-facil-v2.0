@props(['variant' => 'primary'])
@php
    $base = 'px-4 py-1 rounded-md border-2';
    $variantClass = [
        'primary' => 'bg-primary border-primary-border hover:bg-primary-hover focus:bg-primary-focus active:bg-primary-active active:border-light text-light',
        'secondary' => 'bg-secondary border-secondary-border text-secondary-border hover:bg-secondary-hover focus:bg-secondary-focus active',
        'outline' => 'bg-transparent border-primary-border text-primary active:bg-primary active:text-light'
];
@endphp

<button {{ $attributes->
twMerge(['class' => $variantClass[$variant], $base]) }}>
    {{ $slot }}
</button>
