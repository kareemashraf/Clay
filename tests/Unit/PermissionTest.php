<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;
use App\Controller\PermissionController;

class PermissionTest extends TestCase
{
    /**
     * A basic test 
     *
     * @return void
     */
    public function testGetHTTPTest()
    {
        $response = $this->get('/');

        $response->assertStatus(200);
    }


    /**
     * A basic functional test 
     *
     * @return void
     */
    public function testresultExample()
    {
        $response = $this->get( 'api/check/3/1');

        $response
            ->assertStatus(200)
            ->assertExactJson([1]);
    }
}
