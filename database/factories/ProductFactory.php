<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Product>
 */
class ProductFactory extends Factory
{
    private const PRODUCTS = [
        'Shoes',
        'T-shirt',
        'Jeans',
        'Jacket',
        'Sneakers',
        'Hat',
        'Scarf',
        'Gloves',
        'Socks',
        'Shorts',
        'Sweater',
        'Coat',
        'Boots',
        'Sandals',
        'Belt',
        'Backpack',
        'Wallet',
        'Watch',
        'Sunglasses',
        'Earrings'
    ];

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'uuid'=> $this->faker->uuid(),
            'name' => $this->faker->randomElement(self::PRODUCTS),
            'description' => $this->faker->text(),
            'created_at' => now(),
        ];
    }
}
