<?php

declare(strict_types=1);

namespace Tests\Unit;

use Codeception\Test\Unit;
use Tests\Support\UnitTester;

class ExampleTest extends Unit
{
    protected UnitTester $tester;

    protected function _before()
    {
    }

    // tests
    public function testSomeFeature()
    {
        verify(1)->equals('1');
    }
}
