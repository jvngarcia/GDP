<?php

namespace Src\Projects\Application;

use Src\Projects\Domain\ProjectDescription;
use Src\Projects\Domain\ProjectName;
use Src\Projects\Domain\ProjectStatus;
use Src\Projects\Domain\ProjectUser;
use Src\Projects\Infraestructure\ProjectRepository;

class ProjectRegistrar
{
    private ProjectRepository $repository;

    public function __construct(ProjectRepository $repository)
    {
        $this->repository = $repository;
    }

    public function __invoke(string $name, string $description, int $id, bool $status)
    {
        $name = new ProjectName($name);
        $description = new ProjectDescription($description);
        $id = new ProjectUser($id);
        $status = new ProjectStatus($status);

        $this->repository->save($name, $description, $id, $status);
    }
}
