<div {{ $attributes->twMerge(['class' => 'h-[500px] max-w-sm rounded-lg bg-secondary text-light shadow-lg overflow-hidden'])}}>
    <div class="h-[60%] object-fill overflow-hidden">
        <img src="{{ $srcImg }}" alt="{{ $alt }}">
    </div>
    <div class="h-[40%] p-4">
        <div class="flex flex-col h-full">
            <h2 class="font-title text-2xl font-semibold">
                {{ $title }}
            </h2>
            <div class="flex relative overflow-hidden">
                <p>
                    {{ $description }}
                </p>
                <div class="absolute w-full h-full bg-gradient-to-b from-transparent from-30% to-secondary to-90%"></div>
            </div>
            <div class="self-end justify-self-end">
                {{ $slot }}
            </div>
        </div>
    </div>
</div>
