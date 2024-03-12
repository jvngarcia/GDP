<?php

namespace Src\Projects\Application;

use Src\Projects\Domain\ProjectName;
use Src\Projects\Infraestructure\ProjectRepository;

class ProjectFinder
{
    private ProjectRepository $repository;

    public function __construct(ProjectRepository $repository)
    {
        $this->repository = $repository;
    }

    public function __invoke(string $name)
    {
        $name = new ProjectName($name);
        return $this->repository->search($name);
    }
}
