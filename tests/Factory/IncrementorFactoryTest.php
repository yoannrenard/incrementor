<?php

namespace YoannRenard\Incrementor\Factory;

use PHPUnit\Framework\TestCase;
use YoannRenard\Incrementor\ArrayIncrementor;
use YoannRenard\Incrementor\IntegerIncrementor;

class IncrementorFactoryTest extends TestCase
{
    /** @var IncrementorFactory */
    protected $incrementorFactory;

    /**
     * @inheritdoc
     */
    protected function setUp()
    {
        parent::setUp();

        $this->incrementorFactory = new IncrementorFactory();
    }

    /**
     * @test
     */
    public function it_creates_an_integer_incrementor_with_no_parameter()
    {
        $incrementor = new IntegerIncrementor();

        $this->assertEquals(
            $incrementor,
            $this->incrementorFactory->createIntegerIncrementor()
        );
    }

    /**
     * @test
     */
    public function it_creates_an_integer_incrementor_with_start_parameter()
    {
        $incrementor = new IntegerIncrementor(10/*, $min = null, $max = null*/);

        $this->assertEquals(
            $incrementor,
            $this->incrementorFactory->createIntegerIncrementor(10)
        );
    }

    /**
     * @test
     */
    public function it_creates_an_integer_incrementor_with_start_and_min_parameters()
    {
        $incrementor = new IntegerIncrementor(10, 10/*, $max = null*/);

        $this->assertEquals(
            $incrementor,
            $this->incrementorFactory->createIntegerIncrementor(10, 10)
        );
    }

    /**
     * @test
     */
    public function it_creates_an_integer_incrementor_with_start_min_and_max_parameters()
    {
        $incrementor = new IntegerIncrementor(10, 10, 100);

        $this->assertEquals(
            $incrementor,
            $this->incrementorFactory->createIntegerIncrementor(10, 10, 100)
        );
    }

    /**
     * @test
     */
    public function it_creates_an_array_incrementor()
    {
        $incrementor = new ArrayIncrementor('toto', ['toto', 'tata', 'titi']);

        $this->assertEquals(
            $incrementor,
            $this->incrementorFactory->createArrayIncrementor('toto', ['toto', 'tata', 'titi'])
        );
    }

    /**
     * @test
     * @expectedException \YoannRenard\Incrementor\Exception\OutOfRangeException
     */
    public function it_throws_an_exception_as_the_start_parameter_is_not_a_letter()
    {
        $this->incrementorFactory->createLetterIncrementor('toto');
    }

    /**
     * @test
     */
    public function it_creates_a_letter_incrementor_with_no_parameter()
    {
        $incrementor = new ArrayIncrementor('a', [
            'a',
            'b',
            'c',
            'd',
            'e',
            'f',
            'g',
            'h',
            'i',
            'j',
            'k',
            'l',
            'm',
            'n',
            'o',
            'p',
            'q',
            'r',
            's',
            't',
            'u',
            'v',
            'w',
            'x',
            'y',
            'z'
        ]);

        $this->assertEquals(
            $incrementor,
            $this->incrementorFactory->createLetterIncrementor()
        );
    }

    /**
     * @test
     */
    public function it_creates_a_letter_incrementor_with_start_parameter()
    {
        $incrementor = new ArrayIncrementor('z', [
            'a',
            'b',
            'c',
            'd',
            'e',
            'f',
            'g',
            'h',
            'i',
            'j',
            'k',
            'l',
            'm',
            'n',
            'o',
            'p',
            'q',
            'r',
            's',
            't',
            'u',
            'v',
            'w',
            'x',
            'y',
            'z'
        ]);

        $this->assertEquals(
            $incrementor,
            $this->incrementorFactory->createLetterIncrementor('z')
        );
    }
}
