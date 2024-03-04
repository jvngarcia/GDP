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
    public $status;

    public $ITEM_STATUS = [
        '' => null,
        'active' => true,
        'inactive' => false,
    ];

    public function searchData()
    {

        // valdiate status
        if (!in_array($this->status, array_keys($this->ITEM_STATUS))) {
            $this->status = '';
        }

        if (empty($this->status)) {
            return Projects::where('name', 'ilike', '%' . $this->search . '%')
                ->where('code', 'ilike', '%' . $this->search . '%')
                ->paginate(10);
        }


        return Projects::where('status', $this->ITEM_STATUS[$this->status])
            ->orWhere('code', 'ilike', '%' . $this->search . '%')
            ->orWhere('name', 'ilike', '%' . $this->search . '%')
            ->paginate(10);
    }


    public function render()
    {

        return view('livewire.projects.index', [
            'projects' => $this->searchData(),
        ]);
    }
}
