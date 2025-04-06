<?php

namespace App\Actions\Filters;

use App\DTO\HeadFiltersDTO;
use App\Models\Color;
use Lorisleiva\Actions\Concerns\AsAction;

class SelectHeadFiltersAction
{
    use AsAction;

    public function handle(): HeadFiltersDTO
    {
        $colors = Color::query()->select('id', 'name', 'hex_color')
            ->where('being_used', true)
            ->where('active', true)
            ->whereNull('deleted_at')
            ->withCount('products')
            ->orderBy('products_count', 'desc')
            ->get();

        return new HeadFiltersDTO(
            colors: $colors,
            sizes: $colors,
            genders: $colors,
        );
    }
}
