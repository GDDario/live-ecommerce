<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Category>
 */
class CategoryFactory extends Factory
{
    private const CATEGORIES = [
        'Clothing',
        'Footwear',
        'Accessories',
        'Jewelry',
        'Bags',
        'Watches',
        'Sportswear',
        'Outerwear',
        'Headwear',
        'Eyewear',
    ];

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'uuid' => $this->faker->uuid(),
            'name' => $this->faker->randomELement(self::CATEGORIES),
            'slug' => $this->faker->slug(),
            'created_at' => now(),
        ];
    }
}
