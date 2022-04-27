<?php

namespace App\DataFixtures;

use App\Entity\Language;
use Doctrine\Persistence\ObjectManager;
use Doctrine\Bundle\FixturesBundle\Fixture;

class LanguageFixtures extends Fixture
{
    public const LANGUAGES = [
        [
            'name' => 'HTML',
            'image' => 'https://cdn.jsdelivr.net/gh/devicons/devicon/icons/html5/html5-original-wordmark.svg',
        ],
        [
            'name' => 'CSS',
            'image' => 'https://cdn.jsdelivr.net/gh/devicons/devicon/icons/css3/css3-original-wordmark.svg',
        ],
        [
            'name' => 'PHP',
            'image' => 'https://cdn.jsdelivr.net/gh/devicons/devicon/icons/php/php-original.svg',
        ],
        [
            'name' => 'Javascript',
            'image' => 'https://cdn.jsdelivr.net/gh/devicons/devicon/icons/javascript/javascript-original.svg',
        ],
        [
            'name' => 'Java',
            'image' => 'https://cdn.jsdelivr.net/gh/devicons/devicon/icons/java/java-original-wordmark.svg',
        ],
        [
            'name' => 'TypeScript',
            'image' => 'https://cdn.jsdelivr.net/gh/devicons/devicon/icons/typescript/typescript-original.svg',
        ],
        [
            'name' => 'C',
            'image' => 'https://cdn.jsdelivr.net/gh/devicons/devicon/icons/c/c-original.svg',
        ],
        [
            'name' => 'C#',
            'image' => 'https://numgrade.com/wp-content/uploads/2020/11/Logo_Formation_C.png',
        ],
        [
            'name' => 'C++',
            'image' => 'https://raw.githubusercontent.com/isocpp/logos/master/cpp_logo.png',
        ],
        [
            'name' => 'Python',
            'image' => 'https://cdn.jsdelivr.net/gh/devicons/devicon/icons/python/python-original-wordmark.svg',
        ],
        [
            'name' => 'SQL',
            'image' => 'https://azure.microsoft.com/en-us/patterns/styles/glyphs-icons/azure-sql-database.svg',
        ],
    ];

    public function load(ObjectManager $manager): void
    {
        foreach (self::LANGUAGES as $languageData) {
            $language = new Language();
            $language->setName($languageData['name']);
            $language->setImage($languageData['image']);
            $this->addReference('language_' . $languageData['name'], $language);
            $manager->persist($language);
        }
        $manager->flush();
    }
}
