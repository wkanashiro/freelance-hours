<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\User;

class TesteLivewire extends Component
{
    public string $search = '';

    public function render()
    {
        return view('livewire.teste-livewire', [
            'users' => User::query()
            ->when($this->search, fn($q) => $q->where('name', 'like', '%{$this->search}%'))
            ->get()
        ]);
    }
}
