<?php

namespace App\Livewire;

use App\Models\Member;
use Livewire\Component;

class ShowMembers extends Component
{
    public function render()
    {
        $members = Member::orderBy('name','ASC')->get();
        return view('livewire.show-members',[
            'members' => $members,
        ]);
    }
}
