<?php

namespace App\Livewire\Projects;

use Livewire\Attributes\On;
use App\Models\Projects;
use Livewire\Component;

class Edit extends Component
{

    public Projects $project;


    #[On('projectEditor')]
    public function projectEditor(int $id)
    {
        $this->project = Projects::find($id);
    }

    public function render()
    {
        return view('livewire.projects.edit');
    }
}
