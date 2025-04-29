<?php

namespace App\Livewire\Components;

use App\Actions\Products\GetProductsByCategoryAction;
use App\Exceptions\NotFoundException;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Support\Facades\Log;
use Livewire\Attributes\On;
use Livewire\Component;

class HeadProductsGrid extends Component
{
    private const CATEGORY = 'Headwear';
    public array $products;
    public bool $hasError;

    public function mount(GetProductsByCategoryAction $action): void
    {
        $this->filterProducts([]);
//        $this->products = $action->handle(self::CATEGORY);
    }

    #[On('filter-colors')]
    public function filterCheckbox(array $colors): void
    {
        $this->filterProducts($colors);
//        $this->executeAction();
    }

    private function filterProducts(array $colors): void
    {
        Log::info('Colors', $colors);
        if (!$category = Category::query()->where('name', self::CATEGORY)->first()) {
            throw new NotFoundException('Category not found');
        }

        $products = Product::query()
            ->with('tags')
            ->with('variants.color')
            ->where('category_id', $category->id)
            ->when(!empty($colors), function ($query) use ($colors) {
                $query->whereHas('variants', function ($query) use ($colors) {
                    $query->whereIn('color_id', $colors);
                });
            })
            ->get();

        if (!empty($colors)) {
        }


        $this->products = $products->toArray();
    }

    private function executeAction()
    {
        GetProductsByCategoryAction::run(
            self::CATEGORY,
            $this->filters->colors,
            $this->filters->sizes,
            $this->filters->genders,
        );
    }

    public function render()
    {
        return view('livewire.components.head-products-grid');
    }
}
