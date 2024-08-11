@php
    if(!isset($size)){
        $size = "sm";
    }
@endphp

<div class="card card-{{ $size }}">
    <div class="card-img">
        <img src="{{ $imgURL }}" alt="Descrição da Imagem">
    </div>
    <div class="card-info">
        <h2 class="card-title">
            {{ $title }}
        </h2>
        <div class="card-desc">
            <p>
                {{ $description }}
            </p>
        </div>
        <x-ui.button>Ver mais</x-ui.button>
    </div>
</div>