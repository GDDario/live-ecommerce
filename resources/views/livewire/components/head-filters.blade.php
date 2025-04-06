<aside class="h-[85vh] min-w-[300px] glassy-panel sticky top-[10%] left-0 px-4 py-2 flex flex-col gap-4">
    <h2>Filtros</h2>

    <section>
        <h4>Cores</h4>

        <ul class="flex flex-col gap-1 items-start">
            @foreach($colors as $index => $color)
                @if($index < $initialExpanded)
                    <li class="flex gap-1 items-center select-none">
                        <x-mary-checkbox
                            id="{{$color['name']}}-{{$color['id']}}"
                            name="colorFilters"
                            class="w-5 h-5"
                            style="background-color: {{$color['hex_color']}}"
                            label="{{$color['name']}} ({{$color['products_count']}})"
                            wire:model="selectedColors"
                            value="{{$color['id']}}"
                            wire:change="onSelect({{$color['id']}})"
                        />
                    </li>
                @elseif($expanded['colors'])
                    <li class="flex gap-1 items-center select-none">
                        <x-mary-checkbox
                            id="{{$color['name']}}-{{$color['id']}}"
                            name="colorFilters"
                            class="w-5 h-5"
                            style="background-color: {{$color['hex_color']}}"
                            label="{{$color['name']}} ({{$color['products_count']}})"
                            wire:model="selectedColors"
                            value="{{$color['id']}}"
                        />
                    </li>
                @endif
            @endforeach

            <p
                class="select-none cursor-pointer hover:underline"
                wire:click="toggleExpanded('colors')"
            >
                {{!$expanded['colors'] ? 'Ver mais' : 'Ver menos'}}
            </p>
        </ul>
    </section>
</aside>
