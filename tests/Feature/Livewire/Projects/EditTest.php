<?php

namespace Tests\Feature\Livewire\Projects;

use App\Livewire\Projects\Edit;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Livewire\Livewire;
use Tests\TestCase;

class EditTest extends TestCase
{
    /** @test */
    public function renders_successfully()
    {
        Livewire::test(Edit::class)
            ->assertStatus(200);
    }
}
