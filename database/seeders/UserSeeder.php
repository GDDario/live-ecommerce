<?php

namespace Database\Seeders;

use App\Models\Address;
use App\Models\User;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    public function run(): void
    {
        $this->createJohnDoe();
        $this->createRandomUsers();
    }

    /**
     * Creates John Doe, the main users for development and testing.
     *
     * @return void
     */
    private function createJohnDoe(): void
    {
        $user = User::factory()->create([
            'name' => 'John Doe',
            'email' => 'john@email.com',
        ]);

        $addresses = [
            [
                'user_id' => $user->id,
                'receiver_name' => 'John Doe',
                'main' => true,
            ],
            [
                'user_id' => $user->id,
                'receiver_name' => 'Jeane Doe',
                'main' => false,
            ],
        ];

        foreach ($addresses as $address) {
            Address::factory()->create([...$address]);
        };
    }

    /**
     * Create random users.
     *
     * @return void
     */
    private function createRandomUsers(): void
    {
        for ($i = 0; $i < 10; $i++) {
            $user = User::factory()->create();

            Address::factory()->create([
                'user_id' => $user->id,
                'main' => true,
            ]);
        }
    }
}
