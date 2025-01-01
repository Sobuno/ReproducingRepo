<?php

namespace Tests;

use PHPUnit\Framework\TestCase;

abstract class AbstractBase extends TestCase
{
    public function testTrueIsTrueFromAbstract()
    {
        $this->assertTrue(true);
    }
}