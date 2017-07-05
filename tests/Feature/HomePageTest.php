<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class HomePageTest extends TestCase
{

    /**
     * A basic test example.
     *
     * @return void
     */
    use DatabaseMigrations;

    public function test_a_user_can_see_browse_home_page()
    {
        $response = $this->get('/');

        $response->assertStatus(200);
    }
}
