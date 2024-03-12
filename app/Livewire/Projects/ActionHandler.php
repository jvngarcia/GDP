<?php

namespace App\Livewire\Projects;

use Livewire\Attributes\On;
use Livewire\Component;
use Src\Projects\Domain\ProjectId;

class ActionHandler extends Component
{

    #[On('projectCreator')]
    public function projectCreator()
    {
        // TODO: Implement projectCreator() method
        return;
    }

    #[On('projectUpdater')]
    public function projectUpdater(ProjectId $id)
    {
        // TODO: Implement projectUpdater() method
        return;
    }

    public function render()
    {
        return view('livewire.projects.action-handler');
    }
}
