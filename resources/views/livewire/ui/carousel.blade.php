<div x-data="{ currentIndex: @entangle('currentIndex') }" class="relative flex flex-col max-w-xl">
    <!-- Botão para próximo slide -->
    <div class="absolute top-1/2 right-0 transform -translate-y-1/2">
        <button @click="currentIndex++; $wire.nextSlide()">
            <x-svg.right width="60" height="60"/>
        </button>
    </div>
    
    <!-- Botão para slide anterior -->
    <div class="absolute top-1/2 left-0 transform -translate-y-1/2">
        <button @click="currentIndex--; $wire.previousSlide()">
            <x-svg.left width="60" height="60"/>
        </button>
    </div>

    <!-- Slides -->
    @foreach ($images as $index => $img)
        <div x-show="currentIndex === {{ $index }}" class="w-full images" x-transition>
            <img src="{{ asset($img) }}" alt="Slide {{ $index + 1 }}" class="w-full h-auto">
        </div>
    @endforeach

    <!-- Indicadores -->
    <div class="absolute bottom-2 left-1/2 transform -translate-x-1/2 flex space-x-2">
        @foreach ($images as $index => $img)
            <div @click="$wire.goToSlide({{ $index }})"
                 :class="{'bg-blue-500': currentIndex === {{ $index }}, 'bg-gray-300': currentIndex !== {{ $index }}}"
                 class="w-3 h-3 rounded-full cursor-pointer">
            </div>
        @endforeach
    </div>
</div>
