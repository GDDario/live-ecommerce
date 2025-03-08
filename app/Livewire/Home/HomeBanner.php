<?php

namespace App\Livewire\Home;

use Livewire\Component;

class HomeBanner extends Component
{
    public array $slides;

    public function mount() {
        $this->slides = [
            [
                'image' => 'https://www.insiderstore.com.br/cdn/shop/collections/Banner_collectionVERAOnovo.jpg?v=1741013342',
            ],
            [
                'image' => 'https://www.insiderstore.com.br/cdn/shop/files/C2B1_b08788f6-d50f-47d1-b998-65431a9f7afb.jpg?v=1741435919&width=1780',
            ]
        ];
    }

    public function render()
    {
        return view('livewire.home.home-banner');
    }
}
