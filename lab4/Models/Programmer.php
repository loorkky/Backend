<?php

namespace Models;

class Programmer extends Human
{
    private $languages;
    private $experience;

    public function __construct($height, $weight, $age, $languages, $experience)
    {
        parent::__construct($height, $weight, $age);
        $this->languages = $languages;
        $this->experience = $experience;
    }

    public function getLanguages()
    {
        return $this->languages;
    }

    public function setLanguages($languages)
    {
        $this->languages = $languages;
    }

    public function getExperience()
    {
        return $this->experience;
    }

    public function setExperience($experience)
    {
        $this->experience = $experience;
    }

    public function addLanguage($language)
    {
        $this->languages[] = $language;
    }

    protected function birthAnnouncement()
    {
        echo "Програміст народив дитину!<br>";
    }

    public function cleanRoom()
    {
        echo "Програміст прибирає кімнату.<br>";
    }

    public function cleanKitchen()
    {
        echo "Програміст прибирає кухню.<br>";
    }

    public function __toString()
    {
        return "Programmer: " . $this->getHeight() . " см, " . $this->getWeight() . " кг, " . $this->getAge() . " років, Мови програмування: " . implode(', ', $this->languages) . ", Досвід: " . $this->experience . " років";
    }
}

