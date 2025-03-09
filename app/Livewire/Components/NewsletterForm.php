<?php

namespace App\Livewire\Components;

use Livewire\Component;
use Mary\Traits\Toast;

class NewsletterForm extends Component
{
    use Toast;

    public string $email = '';

    public function render()
    {
        return view('livewire.components.newsletter-form');
    }

    public function submit(): void
    {
        if (!filter_var($this->email, FILTER_VALIDATE_EMAIL)) {
            $this->addError('email', 'Digite um endereço de e-mail válido.');
            return;
        }

        $this->success(
            title: 'Email enviado com sucesso!',
            position: 'toast-top toast-end',
            icon: 'o-information-circle',
        );

        $this->reset('email');
    }
}
