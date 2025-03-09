<x-app-layout>
    <livewire:home.home-banner/>

    <section class="mx-20 mt-10">
        <div class="flex items-start gap-3">
            <x-mary-icon name="s-tag" class="w-8 text-green-700"/>
            <h1>Em promoção</h1>
        </div>

        <p>Confira os nossos items em promoção essa semana. Não perca!</p>

        <div class="mt-6">
            <livewire:components.products-grid/>
        </div>
    </section>

    <hr class="mt-10 mx-20"/>

    <section class="mx-20 mt-10">
        <div class="flex items-start gap-3">
            <x-mary-icon name="s-star" class="w-8 text-yellow-300"/>
            <h1>Mais populares</h1>
        </div>

        <p>Esses são os itens mais comprados nos últimos tempos, os preferidos dos nossos clientes, e tendências de
            moda!</p>

        <div class="mt-6">
            <livewire:components.products-grid/>
        </div>
    </section>

    <hr class="mt-10 mx-20"/>

    <section class="mt-10 mx-20">
        <div class="flex items-center gap-3">
            <x-mary-icon name="s-heart" class="w-8 text-red-500"/>
            <h1>Avaliações dos nossos queridos clientes </h1>
        </div>

        <livewire:components.testimonial-list />
    </section>
    {{--    <x-slot name="header">--}}
    {{--        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">--}}
    {{--            {{ __('Profile') }}--}}
    {{--        </h2>--}}
    {{--    </x-slot>--}}

</x-app-layout>
