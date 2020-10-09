<?php

namespace Tests\Unit;

use App\Pin;

class PinsTest extends BaseTestCase
{
    /**
     * Test the pins seeds.
     *
     * @return void
     */
    public function testPinsSeeds()
    {
        // When
        $usersCount = Pin::all()->count();

        // Then
        $this->assertTrue($usersCount == 6);
    }
}
