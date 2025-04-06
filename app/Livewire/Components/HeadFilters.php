<?php

namespace App\Livewire\Components;

use App\Actions\Filters\SelectHeadFiltersAction;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\Log;
use Livewire\Component;

class HeadFilters extends Component
{
    public array $colors;
    public array $sizes;
    public array $genders;
    public int $initialExpanded = 6;
    public array $selectedColors = [];
    public array $expanded = [];

    public function mount(SelectHeadFiltersAction $action): void
    {
        $result = $action->handle();

        $this->colors = $result->colors->toArray();
        $this->sizes = $result->sizes->toArray();
        $this->genders = $result->genders->toArray();

        $this->expanded = [
            'colors' => false,
            'sizes' => false,
            'genders' => false,
        ];
    }

    public function toggleExpanded($key): void
    {
        $this->expanded[$key] = !$this->expanded[$key];
    }

    public function onSelect(int $id) {
        $this->dispatch('reSearch', 'colors', $id);
    }

    public function render()
    {
        return view('livewire.components.head-filters');
    }
}
