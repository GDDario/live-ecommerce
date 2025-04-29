<section>
    @if($hasError)
        <div class="text-center font-bold">
            <p>
                Houve um erro ao carregar os produtos.
            </p>
            <p>
                Tente novamente mais tarde.
            </p>
        </div>
    @else
        {{--        <div class="grid grid-cols-4 sm:grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-4">--}}
        <div class="flex gap-10 flex-wrap">
            @foreach($products as $product)
                <livewire:components.product-card :product="$product"/>
            @endforeach
        </div>
    @endif

</section>
