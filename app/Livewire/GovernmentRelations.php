<?php

namespace App\Livewire;

use Livewire\Attributes\Layout;
use Livewire\Attributes\Title;
use Livewire\Component;

#[Layout('layouts.app')]
#[Title('Government Relations | METRACO')]
class GovernmentRelations extends Component
{
    public function render()
    {
        return view('livewire.government-relations.government-relations');
    }
}
