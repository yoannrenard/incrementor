<?php

namespace YoannRenard\Incrementor;

use PHPUnit\Framework\TestCase;

class ArrayIncrementorTest extends TestCase
{
    /**
     * @test
     * @expectedException \YoannRenard\Incrementor\Exception\OutOfRangeException
     * @expectedExceptionMessage The value `d` is out of range
     */
    public function it_throws_an_exception_has_the_start_value_is_out_of_range()
    {
        new ArrayIncrementor('d', ['a', 'b', 'c']);
    }

    /**
     * @test
     */
    public function it_increments()
    {
        $incrementor = new ArrayIncrementor('monday', ['monday', 'tuesday', 'wednesday', 'thursday', 'friday', 'saturday', 'sunday']);
        $this->assertEquals('tuesday',   $incrementor->increment());
        $this->assertEquals('wednesday', $incrementor->increment());
        $this->assertEquals('thursday',  $incrementor->increment());
        $this->assertEquals('friday',    $incrementor->increment());
        $this->assertEquals('saturday',  $incrementor->increment());
        $this->assertEquals('sunday',    $incrementor->increment());
        $this->assertEquals('monday',    $incrementor->increment());
        $this->assertEquals('tuesday',   $incrementor->increment());
        $this->assertEquals('wednesday', $incrementor->increment());
    }

    /**
     * @test
     */
    public function it_decrements()
    {
        $incrementor = new ArrayIncrementor('monday', ['monday', 'tuesday', 'wednesday', 'thursday', 'friday', 'saturday', 'sunday']);
        $this->assertEquals('sunday',    $incrementor->decrement());
        $this->assertEquals('saturday',  $incrementor->decrement());
        $this->assertEquals('friday',    $incrementor->decrement());
        $this->assertEquals('thursday',  $incrementor->decrement());
        $this->assertEquals('wednesday', $incrementor->decrement());
        $this->assertEquals('tuesday',   $incrementor->decrement());
        $this->assertEquals('monday',    $incrementor->decrement());
        $this->assertEquals('sunday',    $incrementor->decrement());
        $this->assertEquals('saturday',  $incrementor->decrement());
    }

    /**
     * @test
     */
    public function it_returns_true_as_this_incrementor_has_a_next()
    {
        $incrementor = new ArrayIncrementor('monday', ['monday', 'tuesday', 'wednesday', 'thursday', 'friday', 'saturday', 'sunday']);
        $this->assertTrue($incrementor->hasNext());
    }

    /**
     * @test
     */
    public function it_returns_false_as_this_incrementor_does_not_have_a_next()
    {
        $incrementor = new ArrayIncrementor('sunday', ['monday', 'tuesday', 'wednesday', 'thursday', 'friday', 'saturday', 'sunday']);
        $this->assertFalse($incrementor->hasNext());
    }

    /**
     * @test
     */
    public function it_returns_true_as_this_incrementor_has_a_previous()
    {
        $incrementor = new ArrayIncrementor('sunday', ['monday', 'tuesday', 'wednesday', 'thursday', 'friday', 'saturday', 'sunday']);
        $this->assertTrue($incrementor->hasPrevious());
    }

    /**
     * @test
     */
    public function it_returns_false_as_this_incrementor_does_not_have_a_previous()
    {
        $incrementor = new ArrayIncrementor('monday', ['monday', 'tuesday', 'wednesday', 'thursday', 'friday', 'saturday', 'sunday']);
        $this->assertFalse($incrementor->hasPrevious());
    }
}
