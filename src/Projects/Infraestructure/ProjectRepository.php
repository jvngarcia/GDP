<?php

namespace Src\Projects\Infraestructure;

use App\Models\Projects;
use Src\Projects\Domain\ProjectDescription;
use Src\Projects\Domain\ProjectName;
use Illuminate\Support\Str;
use Src\Projects\Domain\ProjectStatus;
use Src\Projects\Domain\ProjectUser;

class ProjectRepository
{

    private Projects $model;

    public function __construct(Projects $model)
    {
        $this->model = $model;
    }

    public function search(ProjectName $name)
    {
        return $this->model->where('name', 'ilike', '%' . $name->value() . '%')->get();
    }

    public function save(ProjectName $name, ProjectDescription $description, ProjectUser $user, ProjectStatus $status)
    {
        $this->model->name = $name->value();
        $this->model->description = $description->value();
        $this->model->code = Str::uuid();
        $this->model->status = $status->value();
        $this->model->user_id = $user->value();
        $this->model->save();
    }
}
