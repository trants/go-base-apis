<?php
/*
 * *************************************************************************
 * Copyright (c) VSP Co., Ltd - All Rights Reserved
 *
 * NOTICE OF LICENSE
 *
 * Licensed under the 3-clause BSD License.
 *
 * This source file is subject to the 3-clause BSD License that is
 * bundled with this package in the LICENSE file.
 */

namespace Vspc\Laratrust\Tests\Activations;

use Mockery as m;
use PHPUnit\Framework\TestCase;
use Vspc\Laratrust\Activations\EloquentActivation;

class EloquentActivationTest extends TestCase
{
    /**
     * The Activation Eloquent instance.
     *
     * @var EloquentActivation
     */
    protected $activation;

    /**
     * @inheritdoc
     */
    protected function setUp(): void
    {
        $this->activation = new EloquentActivation();
    }

    /**
     * @inheritdoc
     */
    protected function tearDown(): void
    {
        $this->activation = null;

        m::close();
    }

    /** @test */
    public function it_can_get_the_completed_attribute_as_a_boolean()
    {
        $this->activation->completed = 1;

        $this->assertTrue($this->activation->completed);
    }

    /** @test */
    public function it_can_get_the_activation_code_using_the_getter()
    {
        $this->activation->code = 'foo';

        $this->assertSame('foo', $this->activation->getCode());
    }
}
