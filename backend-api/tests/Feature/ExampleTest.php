<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class ExampleTest extends TestCase
{
    /**
     * A test that will check if the response is 200
     *
     * @return void
     */
    public function testStatusIs200OK()
    {
        // Given

        // When
        $response = $this->get('/');

        // Then
        $response->assertStatus(200);
    }
}
