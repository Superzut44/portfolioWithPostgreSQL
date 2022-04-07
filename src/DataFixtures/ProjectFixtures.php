<?php

namespace App\DataFixtures;

use App\Entity\Project;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class ProjectFixtures extends Fixture
{
    public const PROJECTS = [
        [
            'id' => 1,
            'name' => 'Marché Conclu',
            'description' => "Projet de création (du  1 décembre 2021 au 11 février 2022) d'un site Marché Conclu pour une cliente, en version mobile, à l'école Wild Code School de Reims.",
            'image' => 'marcheconclu.png',
            'link' => 'https://marcheconclu.chavaudreyxavier.fr',
            'github' => 'https://github.com/Superzut44/marche-conclu'
        ],
        [
            'id' => 2,
            'name' => 'Unlock',
            'description' => "Projet de création (du  21 oct au 13 nov 2021) d'un site fictif de type jeu : escape game ( Unlock! Sherlock adventures ) à l'école Wild Code School de Reims.",
            'image' => 'unlock.jpg',
            'link' => 'https://unlock.labetowiez.fr/index.php',
            'github' => 'https://github.com/Superzut44/marche-conclu'
        ],
        [
            'id' => 3,
            'name' => 'Wild Post',
            'description' => "Création (du  28 sept au 8 oct 2021) d'un site fictif de type journal sur l'école Wild Code School de Reims.",
            'image' => 'wild-post.jpg',
            'link' => 'https://chavaudrey.me/Wild-Post/',
            'github' => 'https://github.com/Superzut44/marche-conclu'
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
            // if ($projectData['image'] === 'marcheconclu.png') {
            //     $this->addReference('project_marcheconclu', $project);
            // } else if ($projectData['image'] === 'unlock.jpg') {
            //     $this->addReference('project_unlock', $project);
            // } else if ($projectData['image'] === 'wild-post.jpg') {
            //     $this->addReference('project_wildpost', $project);
            // }
            $manager->persist($project);
        }

        $manager->flush();
    }
}
