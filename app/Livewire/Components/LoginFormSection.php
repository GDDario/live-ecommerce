<?php

namespace App\Livewire\Components;

use App\Livewire\Forms\LoginForm;
use Livewire\Component;

class LoginFormSection extends Component
{
    public LoginForm $form;

    public function submit(): void
    {

    }

    public function render()
    {
        return view('livewire.components.login-form-section');
    }
}
