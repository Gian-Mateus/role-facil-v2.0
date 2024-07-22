@php
    if(!isset($variant)){
        $variant = "primary";
    }
    if(!isset($size)){
        $size = "sm";
    }
@endphp

<button class="btn btn-{{$variant}} btn-{{$size}}">
    {{ $slot }}
</button>