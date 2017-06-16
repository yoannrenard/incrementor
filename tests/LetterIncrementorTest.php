<?php

namespace YoannRenard\Incrementor;

use PHPUnit\Framework\TestCase;

class LetterIncrementorTest extends TestCase
{
    /**
     * @test
     */
    public function it_increment_alphabet()
    {
        $letterIncrementor = new LetterIncrementor();
        $this->assertEquals('b', $letterIncrementor->increment());
        $this->assertEquals('c', $letterIncrementor->increment());
        $this->assertEquals('d', $letterIncrementor->increment());
        $this->assertEquals('e', $letterIncrementor->increment());
        $this->assertEquals('f', $letterIncrementor->increment());
        $this->assertEquals('g', $letterIncrementor->increment());
        $this->assertEquals('h', $letterIncrementor->increment());
        $this->assertEquals('i', $letterIncrementor->increment());
        $this->assertEquals('j', $letterIncrementor->increment());
        $this->assertEquals('k', $letterIncrementor->increment());
        $this->assertEquals('l', $letterIncrementor->increment());
        $this->assertEquals('m', $letterIncrementor->increment());
        $this->assertEquals('n', $letterIncrementor->increment());
        $this->assertEquals('o', $letterIncrementor->increment());
        $this->assertEquals('p', $letterIncrementor->increment());
        $this->assertEquals('q', $letterIncrementor->increment());
        $this->assertEquals('r', $letterIncrementor->increment());
        $this->assertEquals('s', $letterIncrementor->increment());
        $this->assertEquals('t', $letterIncrementor->increment());
        $this->assertEquals('u', $letterIncrementor->increment());
        $this->assertEquals('v', $letterIncrementor->increment());
        $this->assertEquals('w', $letterIncrementor->increment());
        $this->assertEquals('x', $letterIncrementor->increment());
        $this->assertEquals('y', $letterIncrementor->increment());
        $this->assertEquals('z', $letterIncrementor->increment());
        $this->assertEquals('a', $letterIncrementor->increment());
        $this->assertEquals('b', $letterIncrementor->increment());
        $this->assertEquals('c', $letterIncrementor->increment());
        $this->assertEquals('d', $letterIncrementor->increment());
        $this->assertEquals('e', $letterIncrementor->increment());
        $this->assertEquals('f', $letterIncrementor->increment());
        $this->assertEquals('g', $letterIncrementor->increment());
        $this->assertEquals('h', $letterIncrementor->increment());
        $this->assertEquals('i', $letterIncrementor->increment());
        $this->assertEquals('j', $letterIncrementor->increment());
        $this->assertEquals('k', $letterIncrementor->increment());
        $this->assertEquals('l', $letterIncrementor->increment());
        $this->assertEquals('m', $letterIncrementor->increment());
        $this->assertEquals('n', $letterIncrementor->increment());
        $this->assertEquals('o', $letterIncrementor->increment());
        $this->assertEquals('p', $letterIncrementor->increment());
        $this->assertEquals('q', $letterIncrementor->increment());
        $this->assertEquals('r', $letterIncrementor->increment());
        $this->assertEquals('s', $letterIncrementor->increment());
        $this->assertEquals('t', $letterIncrementor->increment());
        $this->assertEquals('u', $letterIncrementor->increment());
        $this->assertEquals('v', $letterIncrementor->increment());
        $this->assertEquals('w', $letterIncrementor->increment());
        $this->assertEquals('x', $letterIncrementor->increment());
        $this->assertEquals('y', $letterIncrementor->increment());
        $this->assertEquals('z', $letterIncrementor->increment());
        $this->assertEquals('a', $letterIncrementor->increment());
        $this->assertEquals('b', $letterIncrementor->increment());
        $this->assertEquals('c', $letterIncrementor->increment());
        $this->assertEquals('d', $letterIncrementor->increment());
        $this->assertEquals('e', $letterIncrementor->increment());
        $this->assertEquals('f', $letterIncrementor->increment());
        $this->assertEquals('g', $letterIncrementor->increment());
        $this->assertEquals('h', $letterIncrementor->increment());
        $this->assertEquals('i', $letterIncrementor->increment());
        $this->assertEquals('j', $letterIncrementor->increment());
        $this->assertEquals('k', $letterIncrementor->increment());
        $this->assertEquals('l', $letterIncrementor->increment());
        $this->assertEquals('m', $letterIncrementor->increment());
        $this->assertEquals('n', $letterIncrementor->increment());
        $this->assertEquals('o', $letterIncrementor->increment());
        $this->assertEquals('p', $letterIncrementor->increment());
        $this->assertEquals('q', $letterIncrementor->increment());
        $this->assertEquals('r', $letterIncrementor->increment());
        $this->assertEquals('s', $letterIncrementor->increment());
        $this->assertEquals('t', $letterIncrementor->increment());
        $this->assertEquals('u', $letterIncrementor->increment());
        $this->assertEquals('v', $letterIncrementor->increment());
        $this->assertEquals('w', $letterIncrementor->increment());
        $this->assertEquals('x', $letterIncrementor->increment());
        $this->assertEquals('y', $letterIncrementor->increment());
        $this->assertEquals('z', $letterIncrementor->increment());
    }
}
