<?php

namespace App\Livewire\Projects;

use Livewire\Component;
use Src\Projects\Application\ProjectRegistrar;

class Create extends Component
{

    public string $name;
    public string $description;
    public int $user_id;
    public bool $status = false;

    private ProjectRegistrar $projectRegistrar;



    public function boot(ProjectRegistrar $projectRegistrar)
    {
        $this->projectRegistrar = $projectRegistrar;
    }


    public function mount()
    {
        $this->user_id = auth()->id() ?? 0;
    }


    public function rules()
    {
        return [
            'name' => 'required',
            'description' => 'required',
            'user_id' => 'required',
        ];
    }


    public function message()
    {
        return [
            'name.required' => 'The name is required',
            'description.required' => 'The description is required',
            'user_id.required' => 'The user is required',
        ];
    }


    public function save()
    {
        $this->validate();

        $this->projectRegistrar->__invoke(
            $this->name,
            $this->description,
            $this->user_id,
            $this->status
        );

        $this->reset();
    }


    public function render()
    {
        return view('livewire.projects.create');
    }
}
