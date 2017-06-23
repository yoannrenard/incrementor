<?php

namespace YoannRenard\Incrementor\Factory;

use YoannRenard\Incrementor\IncrementorInterface;

interface IncrementorFactoryInterface
{
    /**
     * @param string $start
     * @param array  $values
     *
     * @return IncrementorInterface
     */
    public function createArrayIncrementor($start, array $values);

    /**
     * @param int $start
     * @param int $min
     * @param int $max
     *
     * @return IncrementorInterface
     */
    public function createIntegerIncrementor($start, $min = null, $max = null);

    /**
     * @param string $start
     *
     * @return IncrementorInterface
     */
    public function createLetterIncrementor($start = 'a');
}
