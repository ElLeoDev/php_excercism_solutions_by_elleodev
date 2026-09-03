<?php

class Size
{
    public $height;
    public $width;

    function __construct(int $height = 100, int $width = 100)
    {
        $this->height = $height;
        $this->width = $width;
    }
}
