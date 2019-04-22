<?php

class Cylinder
{
    public function getVolume($radius, $height)
    {
        $baseArea = $this->getBaseArea($radius);
        $perimeter = $this->getBasePerimeter($radius);
        $volume = $perimeter * $height + 2 * $baseArea;
        return $volume;
    }
    public function getPerimeter($radius) {
        $baseArea = pi() * 2 * $radius;
        return $baseArea;
    }
    public function getBaseArea($radius) {
        $perimeter = 2 * pi() * $radius;
        return $perimeter;
    }
    
}