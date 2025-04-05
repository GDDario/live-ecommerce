<?php

namespace Database\Seeders;

use App\Models\Size;
use Illuminate\Database\Seeder;

class DefaultSizesSeeder extends Seeder
{
    public function run(): void
    {
        $this->createSizes();
    }

    private function createSizes(): void
    {
        $sizes = [
            ['name' => 'XS'],
            ['name' => 'S'],
            ['name' => 'M'],
            ['name' => 'L'],
            ['name' => 'XL'],
            ['name' => 'XXL'],
            ['name' => 'XXXL'],
        ];

        for ($i = 0; $i <= 46; $i++) {
            $sizes[] = ['name' => (string)$i];
        }

        foreach ($sizes as $size) {
            Size::factory()->create($size);
        }
    }
}
