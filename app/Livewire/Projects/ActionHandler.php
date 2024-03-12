<?php

namespace App\Livewire\Projects;

use Livewire\Attributes\On;
use Livewire\Component;

class ActionHandler extends Component
{

    #[On('projectCreator')]
    public function projectCreator($name)
    {
        // TODO: Implement projectCreator() method
        return;
    }

    #[On('projectUpdater')]
    public function projectUpdater($id, $name)
    {
        // TODO: Implement projectUpdater() method
        return;
    }

    public function render()
    {
        return view('livewire.projects.action-handler');
    }
}
