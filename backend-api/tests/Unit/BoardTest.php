<?php


namespace Tests\Unit;


use App\Board;
use App\Pin;

class BoardTest extends BaseTestCase
{
    /**
     * Test the boards seeds.
     *
     * @return void
     */
    public function testBoardsSeeds()
    {
        // When
        $usersCount = Board::all()->count();

        // Then
        $this->assertTrue($usersCount == 9);
    }
}
