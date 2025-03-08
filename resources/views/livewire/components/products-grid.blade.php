<div class="lg:grid lg:grid-cols-4 gap-10">
    @foreach($products as $product)
        <livewire:components.product-card :product="$product"/>
    @endforeach
</div>
