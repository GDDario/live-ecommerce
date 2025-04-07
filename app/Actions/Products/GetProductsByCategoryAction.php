<?php

namespace App\Actions\Products;

use App\Exceptions\NotFoundException;
use App\Models\Category;
use App\Models\Product;

class GetProductsByCategoryAction
{
    /**
     * @throws NotFoundException
     */
    public function handle(string $categoryName)
    {
        if (!$category = Category::query()->where('name', $categoryName)->first()) {
            throw new NotFoundException('Category not found');
        }

        $products = Product::query()
            ->with('tags')
            ->with(['variants' => function($query) {
                $query->with('color');
                // Add filters
//                $query->where('')
            }])
            ->where('category_id', $category->id)
            ->get();

        return $products->toArray();
    }
}
