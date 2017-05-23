<?php

namespace App\Tests;

use App\Challenge;
use PHPUnit\Framework\TestCase;

class ChallengeTest extends TestCase
{
    public function testExistingValue()
    {
        $challenge = new Challenge([0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10]);
        $this->assertTrue($challenge->exists(0));
        $this->assertTrue($challenge->exists(1));
        $this->assertTrue($challenge->exists(2));
        $this->assertTrue($challenge->exists(3));
        $this->assertTrue($challenge->exists(4));
        $this->assertTrue($challenge->exists(5));
        $this->assertTrue($challenge->exists(6));
        $this->assertTrue($challenge->exists(7));
        $this->assertTrue($challenge->exists(8));
        $this->assertTrue($challenge->exists(9));
        $this->assertTrue($challenge->exists(10));
    }

    public function testNonExistingValue()
    {
        $challenge = new Challenge([0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10]);
        $this->assertFalse($challenge->exists(11));
    }

    public function testWithoutValues()
    {
        $challenge = new Challenge([]);
        $this->assertFalse($challenge->exists(1));
    }

    public function testWithDuplicatedValues()
    {
        $challenge = new Challenge([0, 1, 2, 2]);
        $this->assertTrue($challenge->exists(2));
    }
}
