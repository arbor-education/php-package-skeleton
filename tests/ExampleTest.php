<?php
/**
 * This file is part of the :package_name package.
 *
 * Copyright (c) Arbor Education
 *
 * For full copyright and license information, please refer to the LICENSE file,
 * located at the package root folder.
 */

namespace Arbor\Tests;

use PHPUnit\Framework\TestCase;
use Arbor\Example;

class ExampleTest extends TestCase
{
    /**
     * @var Example
     */
    protected $example;

    protected function setUp()
    {
        $this->example = new Example();
    }

    /**
     * @test
     */
    public function it_says_phrase()
    {
        $this->assertEquals('Hello', $this->example->say('Hello'));
    }
}
