<?php

namespace App\DTO;

class HeadFiltersDTO
{
    public function __construct(
        public array $colors = [],
        public array $sizes = [],
        public array $genders = [],
    )
    {

    }
}
