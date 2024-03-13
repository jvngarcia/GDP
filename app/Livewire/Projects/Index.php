<?php

namespace App\Livewire\Projects;

use Livewire\Component;
use Livewire\WithoutUrlPagination;
use Livewire\WithPagination;
use Src\Projects\Application\ProjectFinder;

class Index extends Component
{

    use WithPagination, WithoutUrlPagination;

    public string $search = '';
    private ProjectFinder $finder;

    public function boot(ProjectFinder $finder)
    {
        $this->finder = $finder;
    }


    public function render()
    {
        return view('livewire.projects.index', [
            'projects' => $this->finder->__invoke($this->search),
        ]);
    }
}
