<?php

namespace YoannRenard\Incrementor;

use PHPUnit\Framework\TestCase;

class IntegerIncrementorTest extends TestCase
{
    /**
     * @test
     */
    public function it_increments_numbers()
    {
        $incrementor = new IntegerIncrementor(0);
        $this->assertEquals(1, $incrementor->increment());
        $this->assertEquals(2, $incrementor->increment());
        $this->assertEquals(3, $incrementor->increment());
    }

    /**
     * @test
     */
    public function it_increments_numbers_with_a_step()
    {
        $incrementor = new IntegerIncrementor(0);
        $this->assertEquals(3, $incrementor->increment(3));
        $this->assertEquals(5, $incrementor->increment(2));
        $this->assertEquals(10, $incrementor->increment(5));
    }

    /**
     * @test
     */
    public function it_increments_numbers_with_a_step_and_limit()
    {
        $incrementor = new IntegerIncrementor(0, null, 5);
        $this->assertEquals(3, $incrementor->increment(3));
        $this->assertEquals(5, $incrementor->increment(2));
        $this->assertEquals(5, $incrementor->increment(5));
    }

    /**
     * @test
     */
    public function it_decrements_numbers()
    {
        $incrementor = new IntegerIncrementor(4);
        $this->assertEquals(3, $incrementor->decrement());
        $this->assertEquals(2, $incrementor->decrement());
        $this->assertEquals(1, $incrementor->decrement());
    }

    /**
     * @test
     */
    public function it_decrements_numbers_with_a_step()
    {
        $incrementor = new IntegerIncrementor(15);
        $this->assertEquals(10, $incrementor->decrement(5));
        $this->assertEquals(8, $incrementor->decrement(2));
        $this->assertEquals(5, $incrementor->decrement(3));
    }

    /**
     * @test
     */
    public function it_decrements_numbers_with_a_step_and_limit()
    {
        $incrementor = new IntegerIncrementor(15, 6, 10);
        $this->assertEquals(10, $incrementor->decrement(5));
        $this->assertEquals(8, $incrementor->decrement(2));
        $this->assertEquals(9, $incrementor->decrement(3));
        $this->assertEquals(6, $incrementor->decrement(3));
    }

    /**
     * @test
     */
    public function it_returns_true_as_the_incrementor_has_next()
    {
        $incrementor = new IntegerIncrementor(1);
        $this->assertTrue($incrementor->hasNext(5));
    }

    /**
     * @test
     */
    public function it_returns_true_as_the_incrementor_has_next_with_limit()
    {
        $incrementor = new IntegerIncrementor(5, null, 10);
        $this->assertTrue($incrementor->hasNext(5));
    }

    /**
     * @test
     */
    public function it_returns_true_as_the_incrementor_does_not_have_next_with_limit()
    {
        $incrementor = new IntegerIncrementor(5, null, 10);
        $this->assertFalse($incrementor->hasNext(6));
    }

    /**
     * @test
     */
    public function it_returns_true_as_the_incrementor_has_previous()
    {
        $incrementor = new IntegerIncrementor(5);
        $this->assertTrue($incrementor->hasPrevious(1));
    }

    /**
     * @test
     */
    public function it_returns_true_as_the_incrementor_has_previous_with_limit()
    {
        $incrementor = new IntegerIncrementor(5, 0);
        $this->assertTrue($incrementor->hasPrevious(5));
    }

    /**
     * @test
     */
    public function it_returns_true_as_the_incrementor_does_not_have_previous_with_limit()
    {
        $incrementor = new IntegerIncrementor(5, 0);
        $this->assertFalse($incrementor->hasPrevious(6));
    }

//    /**
//     * @test
//     */
//    public function it_increment_a_letter()
//    {
//        $incrementor = new IntegerIncrementor('a');
//        $this->assertEquals('b', $incrementor->increment());
//        $this->assertEquals('c', $incrementor->increment());
//        $this->assertEquals('d', $incrementor->increment());
//    }
//
//    /**
//     * @test
//     */
//    public function it_increment_a_letter_with_a_step()
//    {
//        $incrementor = new IntegerIncrementor('a');
//        $this->assertEquals('d', $incrementor->increment(3));
//        $this->assertEquals('i', $incrementor->increment(2));
//        $this->assertEquals('s', $incrementor->increment(5));
//    }
//
//    /**
//     * @test
//     */
//    public function it_increment_a_letter_with_a_step_and_limit()
//    {
//        $incrementor = new IntegerIncrementor('a', 'k');
//        $this->assertEquals('d', $incrementor->increment(3));
//        $this->assertEquals('i', $incrementor->increment(2));
//        $this->assertEquals('c', $incrementor->increment(5));
//    }


//-- day
//Monday-Tuesday-Wednesday-...
//-- months
//January-February-March-...
//-- an array
//toto-tata-titi-tutu-...
}
