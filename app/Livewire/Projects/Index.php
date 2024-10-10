<?php

namespace App\Livewire\Projects;

use App\Models\Project;
use Livewire\Attributes\Computed;
use Livewire\Component;

class Index extends Component
{
    public function render()
    {
        return view('livewire.projects.index');
    }

    #[Computed()] // a partir do php 8 (isso é como se fosse um atributo)

    public function projects() {
        return Project::query()->inRandomOrder()->get();
    }
}
