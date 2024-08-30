<?php

namespace Models;

class Student extends Human
{
    private $university;
    private $course;

    public function __construct($height, $weight, $age, $university, $course)
    {
        parent::__construct($height, $weight, $age);
        $this->university = $university;
        $this->course = $course;
    }

    public function getUniversity()
    {
        return $this->university;
    }

    public function setUniversity($university)
    {
        $this->university = $university;
    }

    public function getCourse()
    {
        return $this->course;
    }

    public function setCourse($course)
    {
        $this->course = $course;
    }

    public function nextCourse()
    {
        $this->course += 1;
    }

    protected function birthAnnouncement()
    {
        echo "Студент народив дитину!<br>";
    }

    public function cleanRoom()
    {
        echo "Студент прибирає кімнату.<br>";
    }

    public function cleanKitchen()
    {
        echo "Студент прибирає кухню.<br>";
    }

    public function __toString()
    {
        return "Student: " . $this->getHeight() . " см, " . $this->getWeight() . " кг, " . $this->getAge() . " років, Університет: " . $this->university . ", Курс: " . $this->course;
    }
}

