<?php

include_once('Rectangle.php');

class Square extends Rectangle implements Resizeable
{
    public function __construct($name, $width)
    {
        parent::__construct($name, $width, $width, $width);
    }
    public function resize($ratio)
    {
        $this->width = $this->width * $ratio;
    }
}
