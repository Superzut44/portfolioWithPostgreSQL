<?php

namespace App\DataFixtures;

use App\Entity\Tool;
use Doctrine\Persistence\ObjectManager;
use Doctrine\Bundle\FixturesBundle\Fixture;

class ToolFixtures extends Fixture
{
    public const TOOLS = [
        [
            'name' => 'Bootstrap',
            'image' => 'https://cdn.jsdelivr.net/gh/devicons/devicon/icons/bootstrap/bootstrap-original-wordmark.svg',
        ],
        [
            'name' => 'Canva',
            'image' => 'https://cdn.jsdelivr.net/gh/devicons/devicon/icons/canva/canva-original.svg',
        ],
        [
            'name' => 'Composer',
            'image' => 'https://cdn.jsdelivr.net/gh/devicons/devicon/icons/composer/composer-original.svg',
        ],
    ];

    public function load(ObjectManager $manager): void
    {
        foreach (self::TOOLS as $toolData) {
            $tool = new Tool();
            $tool->setName($toolData['name']);
            $tool->setImage($toolData['image']);
            $this->addReference('tool_' . $toolData['name'], $tool);
            
            $manager->persist($tool);
        }

        $manager->flush();
    }
}
