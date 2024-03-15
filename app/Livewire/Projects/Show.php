<?php

namespace App\Livewire\Projects;

use App\Models\Projects;
use Livewire\Attributes\On;
use Livewire\Component;

class Show extends Component
{

    public Projects $project;


    #[On('projectShow')]
    public function projectShow(int $id)
    {
        $this->project = Projects::find($id);
    }

    public function mount()
    {
        $this->project = new Projects();
    }

    public function render()
    {
        return view('livewire.projects.show');
    }
}
