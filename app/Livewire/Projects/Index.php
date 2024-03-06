<?php

namespace App\Livewire\Projects;

use App\Models\Projects;
use Livewire\Component;
use Livewire\WithoutUrlPagination;
use Livewire\WithPagination;

class Index extends Component
{

    use WithPagination, WithoutUrlPagination;

    public $search;

    public function searchData()
    {

        return Projects::where('name', 'ilike', '%' . $this->search . '%')
            ->orWhere('code', 'ilike', '%' . $this->search . '%')
            ->get();
    }




    public function render()
    {

        return view('livewire.projects.index', [
            'projects' => $this->searchData(),
        ]);
    }
}
