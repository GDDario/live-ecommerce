<?php

namespace App\Actions\Filters;

use App\DTO\HeadFiltersDTO;
use Illuminate\Support\Facades\DB;
use Lorisleiva\Actions\Concerns\AsAction;

class SelectHeadFiltersAction
{
    use AsAction;

    public function handle(): HeadFiltersDTO
    {
        $colors = $this->getColors();

        return new HeadFiltersDTO(
            colors: $colors,
            sizes: $colors,
            genders: $colors,
        );
    }

    private function getColors(): array
    {
        $query = DB::select("
            SELECT
                COLORS.id, COLORS.name, COLORS.hex_color, COUNT(COLORS.id) as products_count
            FROM
                COLORS
            INNER JOIN
                product_variants ON product_variants.color_id = COLORS.id
            INNER JOIN
                products ON product_variants.product_id = products.id
            INNER JOIN
                categories ON products.category_id = categories.id
            WHERE
                categories.name = 'Headwear'
            GROUP BY
                COLORS.id
            ORDER BY
                products_count DESC
        ");

        return $query;
    }
}
