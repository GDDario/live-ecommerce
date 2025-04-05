<?php

namespace Database\Seeders;

use App\Models\Color;
use Illuminate\Database\Seeder;

class DefaultColorsSeeder extends Seeder
{
    public function run(): void
    {
        $this->createNeutralColors();
        $this->createPrimaryColors();
        $this->createSecondaryColors();
        $this->createTertiaryColors();
    }

    private function createNeutralColors(): void
    {
        $neutralColors = [
            ['name' => 'Branco', 'hex_color' => '#ffffff'],
            ['name' => 'Preto', 'hex_color' => '#000000'],
            ['name' => 'Cinza', 'hex_color' => '#808080'],
            ['name' => 'Cinza Claro', 'hex_color' => '#d3d3d3'],
            ['name' => 'Cinza escuro', 'hex_color' => '#a9a9a9'],
        ];

        foreach ($neutralColors as $color) {
            Color::create($color);
        }
    }

    private function createPrimaryColors(): void
    {
        $primaryColors = [
            ['name' => 'Vermelho', 'hex_color' => '#ff0000'],
            ['name' => 'Azul', 'hex_color' => '#0000ff'],
            ['name' => 'Amarelo', 'hex_color' => '#ffff00'],
        ];

        foreach ($primaryColors as $color) {
            Color::create($color);
        }
    }

    private function createSecondaryColors(): void
    {
        $secondaryColors = [
            ['name' => 'Verde', 'hex_color' => '#008000'],
            ['name' => 'Laranja', 'hex_color' => '#ffa500'],
            ['name' => 'Roxo', 'hex_color' => '#800080'],
        ];

        foreach ($secondaryColors as $color) {
            Color::create($color);
        }
    }

    private function createTertiaryColors(): void
    {
        $tertiaryColors = [
            ['name' => 'Vermelhão', 'hex_color' => '#e34234'],
            ['name' => 'Âmbar', 'hex_color' => '#ffbf00'],
            ['name' => 'Chartreuse', 'hex_color' => '#7fff00'],
            ['name' => 'Cerceta', 'hex_color' => '#008080'],
            ['name' => 'Violeta', 'hex_color' => '#ee82ee'],
            ['name' => 'Magenta', 'hex_color' => '#ff00ff'],
        ];

        foreach ($tertiaryColors as $color) {
            Color::create($color);
        }
    }
}
