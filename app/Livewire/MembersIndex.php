<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Member;

class MembersIndex extends Component
{
    public function render()
    {
        $members = Member::all();
        return view('livewire.members-index', ['members'=>$members]);
    }
}
