<?php

namespace YoannRenard\Incrementor\Factory;

use YoannRenard\Incrementor\ArrayIncrementor;
use YoannRenard\Incrementor\IntegerIncrementor;

class IncrementorFactory implements IncrementorFactoryInterface
{
    /**
     * @inheritdoc
     */
    public function createArrayIncrementor($start, array $values)
    {
        return new ArrayIncrementor($start, $values);
    }

    /**
     * @inheritdoc
     */
    public function createIntegerIncrementor($start = 1, $min = null, $max = null)
    {
        return new IntegerIncrementor($start, $min, $max);
    }

    /**
     * @inheritdoc
     */
    public function createLetterIncrementor($start = 'a')
    {
        return new ArrayIncrementor($start, [
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
    }
}
