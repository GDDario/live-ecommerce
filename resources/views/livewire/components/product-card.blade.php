<article class="min-h-[400px] w-[400px] bg-gray-300 rounded-2xl relative">
    <div class="flex flex-col gap-2 absolute right-4 top-4 z-10 font-bold">
        @foreach($product['tags'] as $tag)
            <div class="ring-1 ring-black px-2 py-1 rounded-sm">
                {{$tag}}
            </div>
        @endforeach
    </div>

    {{--    @dd($product['variants'][$variantIndex]['images']);--}}

    <x-mary-carousel
        :slides="$product['variants'][$variantIndex]['images']"
        class="min-h-[400px]"
    >
        @scope('content', $slide)
        <a href="#" class="relative group block">
            <img src="{{ $slide['image'] }}" class="w-full h-auto"/>

            <div
                class="absolute inset-0 bg-black bg-opacity-20 text-white flex justify-center items-end opacity-0 group-hover:opacity-100 transition-opacity">
                <div class="pb-20">
                    <span class="text-gray-200 text-sm bg-black bg-opacity-60 px-2 py-1 rounded-lg">
                        Ver mais
                    </span>
                </div>
            </div>
        </a>

        @endscope
    </x-mary-carousel>

    <div class="p-4">
        <h3>{{$product['name']}}</h3>

        <div class="flex items-center gap-1">
            <x-mary-icon name="s-star" class="w-3.5 text-yellow-300"/>
            @if($product['rating'] !== null)
                <p>{{$product['rating']}} - {{$product['reviews_count']}} avaliações</p>
            @else
                <p>Sem avaliações ainda</p>
            @endif
        </div>

        <p class="mt-1">
            R$ {{$product['variants'][$variantIndex]['price']}}
        </p>

        <div class="flex gap-1 items-center mt-2">
            @foreach($product['variants'] as $index => $variant)
                <div
                    class="rounded-full w-5 h-5 flex items-center justify-center cursor-pointer {{$variantIndex === $index ? 'ring-1 ring-black' : ''}}"
                    wire:click="chooseIndex({{$index}})"
                >
                    <div class="rounded-full w-4 h-4" style="background-color: {{$variant['color']['hex_color']}}">

                    </div>
                </div>
            @endforeach
        </div>

        <div class="mt-4 flex gap-2">
            <x-mary-button icon="o-shopping-cart" class="btn-square" tooltip-bottom="Adicionar ao carrinho" />
            <x-mary-button class="btn-square flex-1" label="Ver mais"/>
        </div>
    </div>

    {{--    <x-mary-carousel--}}
    {{--        :slides="collect($product['image_variants'][$variantIndex])->map(fn($variant) => $variant)->toArray()"--}}
    {{--        class="min-h-[400px]"--}}
    {{--    >--}}
    {{--        @scope('content', $slide)--}}
    {{--        <a href="#" class="relative group block">--}}
    {{--            <img src="{{ $slide['image'] }}" class="w-full h-auto"/>--}}

    {{--            <div--}}
    {{--                class="absolute inset-0 bg-black bg-opacity-20 text-white flex items-center justify-center opacity-0 group-hover:opacity-100 transition-opacity">--}}
    {{--                <span class="text-gray-200 text-sm bg-black bg-opacity-60 px-2 py-1 rounded-sm">--}}
    {{--                    Ver mais--}}
    {{--                </span>--}}
    {{--            </div>--}}
    {{--        </a>--}}

    {{--        @endscope--}}
    {{--    </x-mary-carousel>--}}

    {{--    <div class="p-4">--}}
    {{--        <h3>{{$product['title']}}</h3>--}}
    {{--        <div class="flex items-center gap-1">--}}
    {{--            <x-mary-icon name="s-star" class="w-3.5 text-yellow-300"/>--}}
    {{--            <p>{{$product['rating']}} - {{$product['reviews_count']}} avaliações</p>--}}
    {{--        </div>--}}

    {{--        <p class="mt-1">--}}
    {{--            @if($product['prices'][$variantIndex]['promo'])--}}
    {{--                De--}}
    {{--                <del>R$ {{$product['prices'][$variantIndex]['price']}}</del>--}}
    {{--                por <span>R$ {{$product['prices'][$variantIndex]['promo']}}</span>--}}
    {{--            @endif--}}

    {{--            @if($product['prices'][$variantIndex]['pix_discount'])--}}
    {{--                <span>(R$ {{$product['prices'][$variantIndex]['pix_discount']}} no PIX!)</span>--}}
    {{--            @endif--}}
    {{--        </p>--}}

    {{--        @if($product['prices'][$variantIndex]['promo'])--}}
    {{--            <p>--}}
    {{--                Cupom de desconto:--}}
    {{--                <span class="text-slate-700 font-bold">{{$product['prices'][$variantIndex]['promo_code']}}</span>--}}
    {{--            </p>--}}
    {{--        @endif--}}

    {{--        <div class="flex gap-1 items-center mt-2">--}}
    {{--            @foreach($product['color_variants'] as $index => $color)--}}
    {{--                <div--}}
    {{--                    class="rounded-full w-5 h-5 flex items-center justify-center cursor-pointer {{$variantIndex === $index ? 'ring-1 ring-black' : ''}}"--}}
    {{--                    wire:click="chooseIndex({{$index}})"--}}
    {{--                >--}}
    {{--                    <div class="rounded-full w-4 h-4" style="background-color: {{$color}}">--}}

    {{--                    </div>--}}
    {{--                </div>--}}
    {{--            @endforeach--}}
    {{--        </div>--}}
    {{--    </div>--}}
</article>
