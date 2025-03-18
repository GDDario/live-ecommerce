<form class="flex flex-col gap-4 glassy-panel px-20 pt-20 pb-16 rounded-2xl mt-10" wire:submit.prevent="submit">
    <x-mary-input class="min-w-[400px]" label="E-mail" placeholder="E-mail" icon="o-identification"
                  wire:model.live.debounce.250ms="form.email" type="email"/>

    <x-mary-password label="Senha" placeholder="Senha" icon="o-lock-closed" type="password"
                     wire:model.live.debounce.250ms="form.password" right/>

    <div class="my-4">
        <x-mary-checkbox label="Lembrar-se de mim" wire:model="form.remember"
                         hint="Sua sessão permanecerá ativa por uma semana"/>
    </div>

    <x-mary-button label="Entrar" class="btn-primary" type="submit" spinner="submit"/>

    <a class="text-center" href="{{route('register')}}">Criar conta</a>
</form>
