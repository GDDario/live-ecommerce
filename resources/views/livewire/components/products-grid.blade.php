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
        <div class="lg:grid lg:grid-cols-4 gap-10">
            @foreach($products as $product)
                <livewire:components.product-card :product="$product"/>
            @endforeach
        </div>
    @endif

</section>
