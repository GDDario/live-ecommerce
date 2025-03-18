<x-mary-form wire:submit.prevent="submit" no-separator class="mt-2 flex">
    <x-mary-input wire:model="email" placeholder="Seu melhor e-mail" error-field="email"/>

    {{--    <x-slot:actions>--}}
    <x-mary-button label="Inscrever-se" class="btn-primary" icon-right="o-paper-airplane" type="submit" spinner="submit"/>
    {{--    </x-slot:actions>--}}
</x-mary-form>
