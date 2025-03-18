<?php

use App\Livewire\LoginForm;
use Livewire\Livewire;

it('renders successfully', function () {
    Livewire::test(LoginForm::class)
        ->assertStatus(200);
});
