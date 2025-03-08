<?php

namespace App\Livewire\Components;

use Illuminate\Support\Collection;
use Illuminate\Support\Facades\Log;
use Livewire\Component;

class ProductCard extends Component
{
    public array $product;
    public int $colorIndex = 0;

    public function chooseIndex(int $index): void
    {
        $this->colorIndex = $index;
    }

    public function render()
    {
        return view('livewire.components.product-card');
    }
}
