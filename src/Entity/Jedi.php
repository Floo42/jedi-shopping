<?php

namespace App\Entity;

class Jedi
{
    private $id;
    private $name;
    private $saberColor;
    private $description;

    public function setId(int $id)
    {
        $this->id = $id;
    }
    public function getid()
    {
        return $this->id;
    }


    public function setName(string $name)
    {
        $this->name = $name;
    }
    public function getName()
    {
        return $this->name;
    }

    public function setSaberColor(string $color)
    {
        $this->saberColor = $color;
    }
    public function getSaberColor()
    {
        return $this->saberColor;
    }

    public function setDescription(string $desc)
    {
        $this->saber_color = $desc;
    }
    public function getDescription()
    {
        return $this->descritpion;
    }


}