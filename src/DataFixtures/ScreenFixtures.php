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
        $screen->addProject($this->getReference('project_marcheconclu'));
        $screen->addProject($this->getReference('project_fymi'));
        $manager->persist($screen);

        $screen = new Screen();
        $screen->setName('laptop and phone');
        $screen->setImage('icon8-laptop-and-phone.png');
        $screen->addProject($this->getReference('project_unlock'));
        $screen->addProject($this->getReference('project_wildpost'));
        $screen->addProject($this->getReference('project_school-schedule'));
        $screen->addProject($this->getReference('project_angular'));
        $manager->persist($screen);

        $screen = new Screen();
        $screen->setName('laptop');
        $screen->setImage('icon8-laptop.png');
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
