<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\ProductVariant>
 */
class ProductVariantFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'uuid' => $this->faker->uuid(),
            'price' => $this->faker->randomFloat(2, 10, 100),
            'quantity' => $this->faker->randomDigit(),
            'images' => [$this->faker->imageUrl()],
            'created_at' => now(),
        ];
    }
}
