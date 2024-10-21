<?php

namespace Tests;

use Illuminate\Foundation\Testing\TestCase as BaseTestCase;

abstract class TestCase extends BaseTestCase
{
    /**
     * Test setup.
     */
    protected function setUp(): void
    {
        parent::setUp();

        $this->withoutVite();
    }
}
