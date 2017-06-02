<?php

namespace YoannRenard\Incrementor;

use YoannRenard\Incrementor\Exception\OutOfRangeException;

class ArrayIncrementor implements IncrementorInterface
{
    /** @var mixed */
    private $start;

    /** @var array */
    private $values;

    /**
     * @param mixed $start
     * @param array $values
     */
    public function __construct($start, array $values)
    {
        if (!in_array($start, $values)) {
            throw new OutOfRangeException(sprintf('The value `%s` is out of range', $start));
        }

        $this->start  = $start;
        $this->values = $values;

        for ($i=0; $i<array_search($start, $values); $i++) {
            next($this->values);
        }
    }

    /**
     * @inheritdoc
     */
    public function increment($step = 1)
    {
        if (!$this->hasNext($step)) {
            $step = $step - ((count($this->values) - 1) - key($this->values)) - 1;

            reset($this->values);
        }

        for ($i=0; $i<$step; $i++) {
            next($this->values);
        }

        return current($this->values);
    }

    /**
     * @inheritdoc
     */
    public function decrement($step = 1)
    {
        if (!$this->hasPrevious($step)) {
            $step = $step - ((count($this->values) - 1) - key($this->values)) - 1;

            end($this->values);
        }

        for ($i=0; $i<$step; $i++) {
            prev($this->values);
        }

        return current($this->values);
    }

    /**
     * @inheritdoc
     */
    public function hasNext($step = 1)
    {
        return count($this->values) - 1 >= key($this->values) + $step;
    }

    /**
     * @inheritdoc
     */
    public function hasPrevious($step = 1)
    {
        return 0 <= key($this->values) - $step;
    }
}
