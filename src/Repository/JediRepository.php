<?php

namespace App\Repository;
use App\Entity\Jedi;


class JediRepository
{
    private $Jedis;

    public function __construct()
    {
        $jedi1 = new Jedi();
        $jedi1->setId(11);
        $jedi1->setName('Yoda');
        $jedi1->setSaberColor('Green');

        $jedi2 = new Jedi();
        $jedi2->setId(12);
        $jedi2->setName('Qui-gon Jinn');
        $jedi2->setSaberColor('Green');

        $jedi3 = new Jedi();
        $jedi3->setId(13);
        $jedi3->setName('Mace Windu');
        $jedi3->setSaberColor('Purple');

        $this->jedis = [
            $jedi1,
            $jedi2,
            $jedi3,
        ];
    }

    public function findAll(): array
    {
        return $this->jedis;
    }

    public function findOneById(int $id): Jedi
    {
    $jedi = null;
    foreach($this->jedis as $jedi) {
        if ($id == $jedi->getId($id)) {
        $item = $jedi;
        break;
    }
    }
    return $item;
}
}
