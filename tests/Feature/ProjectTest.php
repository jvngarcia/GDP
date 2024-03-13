<?php

namespace Tests\Feature;

use App\Livewire\Projects\Create;
use App\Models\Projects;
use Livewire\Livewire;
use Src\Projects\Application\ProjectRegistrar;
use Src\Projects\Domain\ProjectName;
use Src\Projects\Infraestructure\ProjectRepository;
use Tests\TestCase;

class ProjectTest extends TestCase
{

    public function test_create_project_with_component(): void
    {
        $user = \App\Models\User::factory()->create();

        Livewire::test(Create::class)
            ->set('name', 'Project by component')
            ->set('description', 'Project Description by component')
            ->set('user_id', $user->id)
            ->set('status', true)
            ->call('save');

        $this->assertDatabaseHas('projects', [
            'name' => 'Project by component',
            'description' => 'Project Description by component',
            'user_id' => $user->id,
            'status' => true,
        ]);
    }

    public function test_create_a_project_with_app(): void
    {

        $user = \App\Models\User::factory()->create();

        $model = new Projects();
        $projectRepository = new ProjectRepository($model);
        $dependency = new ProjectRegistrar($projectRepository);
        $dependency->__invoke('Project Name', 'Project Description', $user->id, true);

        $this->assertDatabaseHas('projects', [
            'name' => 'Project Name',
            'description' => 'Project Description',
            'user_id' => $user->id,
            'status' => true,
        ]);
    }


    public function test_validation_create_project(): void
    {
        Livewire::test(Create::class)
            ->set('name', '')
            ->set('description', '')
            ->set('user_id', '')
            ->call('save')
            ->assertHasErrors(['name' => 'required', 'description' => 'required', 'user_id' => 'required']);
    }

    public function test_search_project(): void
    {
        $user = \App\Models\User::factory()->create();

        $model = new Projects();
        $projectRepository = new ProjectRepository($model);
        $dependency = new ProjectRegistrar($projectRepository);
        $dependency->__invoke('Project Name', 'Project Description', $user->id, true);


        $search = new ProjectName('Project Name');
        $projects = $projectRepository->search($search);

        $this->assertNotEmpty($projects);
    }
}
