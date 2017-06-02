<?php

namespace YoannRenard\Incrementor;

class IntegerIncrementor implements IncrementorInterface
{
    /** @var int */
    private $start;

    /** @var int */
    private $max;

    /** @var int */
    private $min;

    /** @var array */
    private $values;

    /**
     * @param int   $start
     * @param int   $max
     */
    public function __construct($start, $min = null, $max = null)
    {
        $this->start  = $start;
        $this->value  = $start;
        $this->min    = $min;
        $this->max    = $max;
    }

    /**
     * @inheritdoc
     */
    public function increment($step = 1)
    {
        if (!$this->hasNext($step)) {
            $step = $step - ($this->max - $this->value);

            $this->value = $this->start;
        }

        $this->value = $this->value + $step;

        return $this->value;
    }

    /**
     * @inheritdoc
     */
    public function decrement($step = 1)
    {
        if (!$this->hasPrevious($step)) {
            $step = $step - ($this->value - $this->min);

            $this->value = $this->max;
        }


        $this->value = $this->value - $step;

        return $this->value;
    }

    /**
     * @inheritdoc
     */
    public function hasNext($step = 1)
    {
        return null === $this->max || $this->max >= $this->value + $step;
    }

    /**
     * @inheritdoc
     */
    public function hasPrevious($step = 1)
    {
        return null === $this->min || $this->min <= $this->value - $step;
    }
}
