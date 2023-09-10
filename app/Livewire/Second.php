<?php

namespace App\Livewire;

use Livewire\Component;

class Second extends Component
{
    public string $title = '';

    public function updateTitle($to)
    {
        $this->title = $to;
    }

    public function render()
    {
        return view('livewire.second');
    }
}
