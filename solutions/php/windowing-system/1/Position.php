<?php

class Position
{
    public $y;
    public $x;

    function __construct(int $y = 0, int $x = 0)
    {
        $this->y = $y;
        $this->x = $x;
    }
}

