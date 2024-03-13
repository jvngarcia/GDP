<?php

namespace Tests\Unit;

use App\Models\Projects;
use PHPUnit\Framework\TestCase;
use Src\Projects\Application\ProjectRegistrar;
use Src\Projects\Infraestructure\ProjectRepository;

class ProjectRegistrarTest extends TestCase
{
    /**
     * A basic test example.
     */
    public function test_project_registrar_app(): void
    {
        $model = new Projects();
        $projectRepository = new ProjectRepository($model);
        $dependency = new ProjectRegistrar($projectRepository);

        $this->assertInstanceOf(ProjectRegistrar::class, $dependency);
    }
}
