<?php

namespace Src\Projects\Infraestructure;

use App\Models\Projects;
use Src\Projects\Domain\ProjectName;

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
}
