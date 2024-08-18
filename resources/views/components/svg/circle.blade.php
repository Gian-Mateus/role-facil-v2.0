@props([
    'color' => 'fill-secondary',
    'width' => '15',
    'height' => '15',
    'active' => '0'
    ])

<svg xmlns="http://www.w3.org/2000/svg" class="{{ $color }}" width="{{ $width }}" height="{{ $height }}" viewBox="0 0 24 24"><circle cx="12" cy="12" r="8" opacity="{{ $active }}"/><path d="M12 2C6.47 2 2 6.47 2 12s4.47 10 10 10s10-4.47 10-10S17.53 2 12 2m0 18c-4.42 0-8-3.58-8-8s3.58-8 8-8s8 3.58 8 8s-3.58 8-8 8"/></svg>
