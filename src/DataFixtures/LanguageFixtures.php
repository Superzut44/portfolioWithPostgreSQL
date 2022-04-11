<?php

namespace App\DataFixtures;

use App\Entity\Language;
use Doctrine\Persistence\ObjectManager;
use Doctrine\Bundle\FixturesBundle\Fixture;

class LanguageFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        $language = new Language();
        $language->setName('html');
        $language->setImage('https://cdn.jsdelivr.net/gh/devicons/devicon/icons/html5/html5-original-wordmark.svg');
        $this->addReference('language_html', $language);
        $manager->persist($language);

        $language = new Language();
        $language->setName('css');
        $language->setImage('https://cdn.jsdelivr.net/gh/devicons/devicon/icons/css3/css3-original-wordmark.svg');
        $this->addReference('language_css', $language);
        $manager->persist($language);

        $language = new Language();
        $language->setName('php');
        $language->setImage('https://cdn.jsdelivr.net/gh/devicons/devicon/icons/php/php-original.svg');
        $this->addReference('language_php', $language);
        $manager->persist($language);

        $language = new Language();
        $language->setName('javascript');
        $language->setImage('https://cdn.jsdelivr.net/gh/devicons/devicon/icons/javascript/javascript-original.svg');
        $this->addReference('language_javascript', $language);
        $manager->persist($language);

        $manager->flush();
    }
}
