<?php

namespace App\Livewire;

use Livewire\Component;

class First extends Component
{
    public string $title = '';
    public string $title2 = '';

    public function updateTitle($to)
    {
        $this->title = $to;
    }

    public function iAmLongLoading()
    {
        sleep(5);
        $this->title2 = 'long loaded';
    }

    public function render()
    {
        return view('livewire.first');
    }
}
