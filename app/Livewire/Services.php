<?php

namespace App\Livewire;

use Livewire\Component;
use Livewire\Attributes\Layout;
use Livewire\Attributes\Title;

#[Layout('layouts.app')]
#[Title('Business Units | METRACO')]
class Services extends Component
{
    public function render()
    {
        return view('livewire.services.services');
    }
}
