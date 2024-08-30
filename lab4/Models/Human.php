<?php

namespace Models;

use Interfaces\HouseCleaning;

abstract class Human implements HouseCleaning
{
    private $height;
    private $weight;
    private $age;

    public function __construct($height, $weight, $age)
    {
        $this->height = $height;
        $this->weight = $weight;
        $this->age = $age;
    }

    public function getHeight()
    {
        return $this->height;
    }

    public function setHeight($height)
    {
        $this->height = $height;
    }

    public function getWeight()
    {
        return $this->weight;
    }

    public function setWeight($weight)
    {
        $this->weight = $weight;
    }

    public function getAge()
    {
        return $this->age;
    }

    public function setAge($age)
    {
        $this->age = $age;
    }

    abstract protected function birthAnnouncement();

    public function giveBirth()
    {
        $this->birthAnnouncement();
    }
}

