<?php

namespace App\Enums;

enum CategoryEnum: string
{
    case clothing = 'Clothing';
    case footwear = 'Footwear';
    case accessories = 'Accessories';
    case jewelry = 'Jewelry';
    case bags = 'Bags';
    case watches = 'Watches';
    case sportswear = 'Sportswear';
    case outerwear = 'Outerwear';
    case headwear = 'Headwear';

    static public function validate(string $category): bool
    {
        return self::tryFrom($category) !== null;
    }
}
