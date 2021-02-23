<?php

namespace App\DataFixtures;

use App\Entity\Task;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class AppFixtures extends Fixture
{
    public function load(ObjectManager $manager)
    {
        for ($i = 1; $i <= 10; $i++){
            $task = new Task();
            $task-> setName('tâche n°'. $i);
            $task -> setDescription('Descriptio blabla'. $i);
            $task -> setDone(0); // pas nécéssaire car $done = 0 dans l'entité


            $manager->persist($task);
        }

        $manager->flush();
    }
}
