<?php

namespace App\Livewire\Projects;

use Livewire\Attributes\On;
use Livewire\Component;
use Src\Projects\Domain\ProjectId;

class ActionHandler extends Component
{

    public bool $create;
    public bool $update;

    #[On('projectCreator')]
    public function projectCreator()
    {
        $this->create = true;
        $this->update = false;
    }

    #[On('projectUpdater')]
    public function projectUpdater(int $id)
    {

        $this->create = false;
        $this->update = true;

        $this->dispatch('projectShow', id: $id);
    }

    #[On('hideWindow')]
    public function hideWindow()
    {
        $this->create = false;
        $this->update = false;
    }

    public function render()
    {
        return view('livewire.projects.action-handler');
    }
}
