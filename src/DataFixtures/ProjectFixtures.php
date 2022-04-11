<?php

namespace App\DataFixtures;

use App\Entity\Project;
use Doctrine\Persistence\ObjectManager;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\DataFixtures\DependentFixtureInterface;

class ProjectFixtures extends Fixture implements DependentFixtureInterface
{
    public const PROJECTS = [
        [
            'name' => 'Marché Conclu',
            'description' => "Projet de création (du  1 décembre 2021 au 11 février 2022) d'un site Marché Conclu pour une cliente, en version mobile, à l'école Wild Code School de Reims.",
            'image' => 'marcheconclu.png',
            'link' => 'https://marcheconclu.chavaudreyxavier.fr',
            'github' => 'https://github.com/Superzut44/marche-conclu',
            'languages' => ['html', 'css', 'php', 'javascript'],
            'tools' => ['Symfony', 'Sass', 'Bootstrap', 'MySQL', 'Composer', 'Git', 'Visual Studio Code', 'Linux']
        ],
        [
            'name' => 'Unlock',
            'description' => "Projet de création (du  21 oct au 13 nov 2021) d'un site fictif de type jeu : escape game ( Unlock! Sherlock adventures ) à l'école Wild Code School de Reims.",
            'image' => 'unlock.jpg',
            'link' => 'https://unlock.labetowiez.fr/index.php',
            'github' => 'https://github.com/Superzut44/unlock',
            'languages' => ['html', 'css', 'php'],
            'tools' => ['Symfony', 'MySQL', 'Git', 'Visual Studio Code', 'Linux']
        ],
        [
            'name' => 'Wild Post',
            'description' => "Création (du  28 sept au 8 oct 2021) d'un site fictif de type journal sur l'école Wild Code School de Reims.",
            'image' => 'wild-post.jpg',
            'link' => 'https://chavaudrey.me/Wild-Post/',
            'github' => 'https://github.com/Superzut44/Wild-Post',
            'languages' => ['html', 'css'],
            'tools' => ['Git', 'Visual Studio Code', 'Linux']
        ],
    ];

    public function load(ObjectManager $manager): void
    {
        foreach (self::PROJECTS as $key => $projectData) {
            $project = new Project();
            $project->setName($projectData['name']);
            $project->setDescription($projectData['description']);
            $project->setImage($projectData['image']);
            $project->setLink($projectData['link']);
            $project->setGithub($projectData['github']);
            $this->addReference('project_' . $key, $project);
            foreach ($projectData['languages'] as $languageData) {
                $project->addLanguage($this->getReference('language_' . $languageData));
            };
            foreach ($projectData['tools'] as $toolData) {
                $project->addTool($this->getReference('tool_' . $toolData));
            };
             if ($projectData['image'] === 'marcheconclu.png') {
                $this->addReference('project_marcheconclu', $project);
            } else if ($projectData['image'] === 'unlock.jpg') {
                $this->addReference('project_unlock', $project);
            } else if ($projectData['image'] === 'wild-post.jpg') {
                $this->addReference('project_wildpost', $project);
            }
            $manager->persist($project);
        }

        $manager->flush();
    }

    public function getDependencies()
    {
        return [
            ToolFixtures::class,
            LanguageFixtures::class
        ];
    }
}
