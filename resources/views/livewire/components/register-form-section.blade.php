<form class="flex flex-col gap-4 glassy-panel px-20 pt-20 pb-16 rounded-2xl mt-10" wire:submit.prevent="submit">
    <x-mary-input class="min-w-[400px]" label="Nome" placeholder="Nome completo" icon="o-user"
                  wire:model.live.debounce.250ms="form.name" type="text"/>

    <x-mary-input class="min-w-[400px]" label="CPF" placeholder="123-456-789-01" icon="o-user"
                  wire:model.live.debounce.250ms="form.cpf" type="text"/>

    <x-mary-input class="min-w-[400px]" label="E-mail" placeholder="E-mail" icon="o-identification"
                  wire:model.live.debounce.250ms="form.email" type="email"/>

    <x-mary-password label="Senha" placeholder="**********" icon="o-lock-closed" type="password"
                     wire:model.live.debounce.250ms="form.password" right/>

    <x-mary-password label="Confirmação da senha" placeholder="**********" icon="o-lock-closed" type="password"
                     wire:model.live.debounce.250ms="form.passwordConfirmation" right/>

    <x-mary-button label="Registrar" class="btn-primary" type="submit" spinner="submit"/>

    <a class="text-center" href="{{route('login')}}">Fazer login</a>
</form>
