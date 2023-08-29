<?php

namespace App\Livewire;

use Livewire\Component;

class MembersContent extends Component
{
    public $members = [];
    public function render()
    {
        return view('livewire.members-content');
    }
}
