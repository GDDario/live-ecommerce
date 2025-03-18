<?php

namespace App\Livewire\Components;

use App\Livewire\Forms\RegisterForm;
use Livewire\Component;

class RegisterFormSection extends Component
{
    public RegisterForm $form;

    public function submit(): void
    {
    }

    public function render()
    {
        return view('livewire.components.register-form-section');
    }
}
