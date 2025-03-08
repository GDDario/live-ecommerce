<article class="min-h-[400px] w-[400px] bg-gray-300 rounded-2xl relative">
    <div class="flex flex-col gap-2 absolute right-4 top-4 z-10 font-bold">
        @foreach($product['image_tags'] as $tag)
            <div class="ring-1 ring-black px-2 py-1 rounded-sm">
                {{$tag}}
            </div>
        @endforeach
    </div>

    <x-mary-carousel
        :slides="collect($product['image_variants'][$colorIndex])->map(fn($variant) => $variant)->toArray()"
        class="min-h-[400px]"
    >
        @scope('content', $slide)
        <a href="#" class="relative group block">
            <img src="{{ $slide['image'] }}" class="w-full h-auto"/>

            <div
                class="absolute inset-0 bg-black bg-opacity-20 text-white flex items-center justify-center opacity-0 group-hover:opacity-100 transition-opacity">
                <span class="text-gray-200 text-sm bg-black bg-opacity-60 px-2 py-1 rounded-sm">
                    Ver mais
                </span>
            </div>
        </a>

        @endscope
    </x-mary-carousel>

    <div class="p-4">
        <h3>{{$product['title']}}</h3>
        <div class="flex items-center gap-1">
            <x-mary-icon name="s-star" class="w-3.5 text-yellow-300"/>
            <p>{{$product['rating']}} - {{$product['reviews_count']}} avaliações</p>
        </div>

        <p class="mt-1">
            @if($product['prices'][$colorIndex]['promo'])
                De
                <del>R$ {{$product['prices'][$colorIndex]['price']}}</del>
                por <span>R$ {{$product['prices'][$colorIndex]['promo']}}</span>
            @endif

            @if($product['prices'][$colorIndex]['pix_discount'])
                <span>(R$ {{$product['prices'][$colorIndex]['pix_discount']}} no PIX!)</span>
            @endif
        </p>

        @if($product['prices'][$colorIndex]['promo'])
            <p>
                Cupom de desconto:
                <span class="text-slate-700 font-bold">{{$product['prices'][$colorIndex]['promo_code']}}</span>
            </p>
        @endif

        <div class="flex gap-1 items-center mt-2">
            @foreach($product['color_variants'] as $index => $color)
                <div
                    class="rounded-full w-5 h-5 flex items-center justify-center cursor-pointer {{$colorIndex === $index ? 'ring-1 ring-black' : ''}}"
                    wire:click="chooseIndex({{$index}})"
                >
                    <div class="rounded-full w-4 h-4" style="background-color: {{$color}}">

                    </div>
                </div>
            @endforeach
        </div>
    </div>
</article>
