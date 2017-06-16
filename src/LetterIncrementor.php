<?php

namespace YoannRenard\Incrementor;

class LetterIncrementor extends ArrayIncrementor
{
    const LETTER_LIST = [
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
    ];

    /**
     * @param mixed $start
     */
    public function __construct($start = 'a')
    {
        parent::__construct($start, self::LETTER_LIST);
    }
}
