<?php

namespace App\DataFixtures;

use App\Entity\Language;
use Doctrine\Persistence\ObjectManager;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\DataFixtures\DependentFixtureInterface;

class LanguageFixtures extends Fixture implements DependentFixtureInterface
{
    public function load(ObjectManager $manager): void
    {
        // $language = new Language();
        // $language->setName('html');
        // $language->setImage('https://cdn.jsdelivr.net/gh/devicons/devicon/icons/html5/html5-original-wordmark.svg');
        // $language->addProject($this->getReference('project_0'));
        // // $language->addProject($this->getReference('project_1'));
        // // $language->addProject($this->getReference('project_2'));
        
        // $manager->persist($language);

        // $language = new Language();
        // $language->setName('css');
        // $language->setImage('https://cdn.jsdelivr.net/gh/devicons/devicon/icons/css3/css3-original-wordmark.svg');
        // $language->addProject($this->getReference('project_0'));
        // // $language->addProject($this->getReference('project_1'));
        // // $language->addProject($this->getReference('project_2'));
        
        // $manager->persist($language);

        // $language = new Language();
        // $language->setName('php');
        // $language->setImage('https://cdn.jsdelivr.net/gh/devicons/devicon/icons/php/php-original.svg');
        // $language->addProject($this->getReference('project_0'));
        // // $language->addProject($this->getReference('project_1'));
        // // $language->addProject($this->getReference('project_2'));
        
        // $manager->persist($language);

        // $language = new Language();
        // $language->setName('javascript');
        // $language->setImage('https://cdn.jsdelivr.net/gh/devicons/devicon/icons/javascript/javascript-original.svg');
        // $language->addProject($this->getReference('project_0'));
        // // $language->addProject($this->getReference('project_1'));
        // // $language->addProject($this->getReference('project_2'));
        
        // $manager->persist($language);

        // $manager->flush();
    }

    public function getDependencies()
    {
        return [
            ProjectFixtures::class,
        ];
    }
}
