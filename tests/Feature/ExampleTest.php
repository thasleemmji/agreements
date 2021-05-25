<?php

namespace Tests\Feature;

use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class ExampleTest extends TestCase
{
    use RefreshDatabase;

    public function testHomepage()
    {
        $this->get('/')
            ->assertSeeText('Laravel tests');
    }

    public function testSeeAddedUserInView()
    {
        User::factory(['name' => 'Test user'])->create();

        $this->get('/')
            ->assertSeeTextInOrder(['Laravel tests', 'Users', 'Test user']) ;
    }
}
