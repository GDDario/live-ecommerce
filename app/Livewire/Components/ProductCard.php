<?php

namespace App\Livewire\Components;

use Livewire\Component;

class ProductCard extends Component
{
    public array $product;
    public int $variantIndex = 0;

    public function chooseIndex(int $index): void
    {
        $this->variantIndex = $index;
    }

    public function render()
    {
        return view('livewire.components.product-card');
    }
}
