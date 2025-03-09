<?php

namespace App\Livewire\Components;

use Livewire\Component;

class TestimonialCard extends Component
{
    public array $testimonial;

    public function render()
    {
        return view('livewire.components.testimonial-card');
    }
}
