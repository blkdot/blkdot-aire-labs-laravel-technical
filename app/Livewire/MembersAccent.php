<?php

namespace App\Livewire;

use Livewire\Component;
use App\Helpers\helper as Helper;

class MembersAccent extends Component
{
    public $accent_count = 2;
    public $accent_pos = array();
    
    public function render()
    {
        for ($i = 0; $i < $this->accent_count; $i++) {
            $pos = get_accent_pos($i);
            array_push($this->accent_pos, $pos);
        }
        return view('livewire.members-accent', ['accent_pos' => $this->accent_pos]);
    }
}
