<?php

namespace App\Livewire\Components;

use App\Actions\Products\GetProductsByCategoryAction;
use App\Enums\CategoryEnum;
use Illuminate\Support\Facades\Log;
use Livewire\Attributes\On;
use Livewire\Component;

class ProductsGrid extends Component
{
    public array $products;
    public bool $hasError;

    public function mount(
        string $category,
        GetProductsByCategoryAction $action,
    ): void
    {
        $category = ucfirst($category);
        if (!CategoryEnum::validate($category)) {
            $this->hasError = true;
            return;
        }

        $this->products = $action->handle($category);
    }

    #[On('filter')]
    public function reSearch(): void
    {
        Log::info('chegou ao destino');
    }

    public function render()
    {
        return view('livewire.components.products-grid');
    }
}
