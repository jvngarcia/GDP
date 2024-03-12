<?php

namespace App\Livewire\Projects;

use App\Models\Projects;
use Livewire\Component;
use Livewire\WithoutUrlPagination;
use Livewire\WithPagination;
use Src\Projects\Application\ProjectFinder;

class Index extends Component
{

    use WithPagination, WithoutUrlPagination;

    public string $search = '';
    private ProjectFinder $finder;

    public function searchData()
    {
        return $this->finder->__invoke($this->search);
    }

    public function render(ProjectFinder $finder)
    {
        $this->finder = $finder;

        return view('livewire.projects.index', [
            'projects' => $this->searchData(),
        ]);
    }
}
