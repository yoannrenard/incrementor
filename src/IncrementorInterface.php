<?php

namespace YoannRenard\Incrementor;

interface IncrementorInterface
{
    /**
     * @param int $step
     *
     * @return mixed
     */
    public function increment($step = 1);

    /**
     * @param int $step
     *
     * @return mixed
     */
    public function decrement($step = 1);

    /**
     * @param int $step
     *
     * @return bool
     */
    public function hasNext($step = 1);

    /**
     * @param int $step
     *
     * @return bool
     */
    public function hasPrevious($step = 1);
}
