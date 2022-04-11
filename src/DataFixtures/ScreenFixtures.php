<?php

namespace App\DataFixtures;

use App\Entity\Screen;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
use Doctrine\Common\DataFixtures\DependentFixtureInterface;


class ScreenFixtures extends Fixture implements DependentFixtureInterface
{
    public function load(ObjectManager $manager): void
    {
        $screen = new Screen();
        $screen->setName('phone');
        $screen->setImage('icon8-phone.png');
        $screen->addProject($this->getReference('project_0'));
        
        $manager->persist($screen);

        $screen = new Screen();
        $screen->setName('phone');
        $screen->setImage('icon8-laptop-and-phone.png');
        $screen->addProject($this->getReference('project_1'));
        $screen->addProject($this->getReference('project_2'));
        
        $manager->persist($screen);

        $manager->flush();
    }

    public function getDependencies()
    {
        return [
            ProjectFixtures::class,
        ];
    }
}
