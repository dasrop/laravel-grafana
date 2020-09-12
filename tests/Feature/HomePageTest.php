<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class HomePageTest extends TestCase
{
    use DatabaseMigrations;

    public function test_home_page()
    {
        $response = $this->get('/');

        $response->assertStatus(200);
    }
}
