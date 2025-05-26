<?php

class Worker
{
    private $name;
    private $age;
    private $hours;
    private $position;
    private $experience;

    public function __construct($name, $age, $hours)
    {
        $this->name = $name;
        $this->age = $age;
        $this->hours = $hours;
    }

    public function work()
    {
        print_r('I am working');
        echo '<br>';
    }

    public function setPosition($value)
    {
        $this->position = $value;
    }

    public function getPosition()
    {
        return $this->position;
    }
}
