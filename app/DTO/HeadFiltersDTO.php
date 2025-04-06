<?php

namespace App\DTO;

use Illuminate\Support\Collection;

class HeadFiltersDTO
{
    public function __construct(
        public Collection $colors,
        public Collection $sizes,
        public Collection $genders
    )
    {

    }
}
