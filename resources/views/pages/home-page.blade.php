<x-app-layout>
    <livewire:home.home-banner/>

    <section class="mx-20 mt-10">
        <div class="flex items-start gap-3">
            <x-mary-icon name="s-star" class="w-8 text-yellow-300"/>
            <h1>Mais populares</h1>
        </div>

        <p>Esses são os itens mais comprados nos últimos tempos, os preferidos dos nossos clientes, e tendências de moda!</p>

        <div class="mt-6">
        <livewire:components.products-grid />
        </div>
    </section>
    {{--    <x-slot name="header">--}}
    {{--        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">--}}
    {{--            {{ __('Profile') }}--}}
    {{--        </h2>--}}
    {{--    </x-slot>--}}

</x-app-layout>
