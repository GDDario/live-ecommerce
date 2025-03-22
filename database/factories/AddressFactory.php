<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Address>
 */
class AddressFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'uuid' => fake()->uuid(),
            'receiver_name' => fake()->name(),
            'phone_number' => fake()->phoneNumber(),
            'postal_code' => fake()->postcode(),
            'country' => fake()->country(),
            'state' => fake()->countryCode(),
            'city' => fake()->city(),
            'district' => fake()->city(),
            'street_address' => fake()->address(),
            'house_number' => fake()->buildingNumber(),
            'address_line_2' => fake()->streetAddress(),
            'landmark' => fake()->buildingNumber(),
            'main' => true,
            'created_at' => now(),
        ];
    }
}
