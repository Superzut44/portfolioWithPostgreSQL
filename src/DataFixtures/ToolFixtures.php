<?php

namespace App\DataFixtures;

use App\Entity\Tool;
use Doctrine\Persistence\ObjectManager;
use Doctrine\Bundle\FixturesBundle\Fixture;

class ToolFixtures extends Fixture
{
    public const TOOLS = [
        [
            'name' => 'Symfony',
            'image' => 'https://cdn.jsdelivr.net/gh/devicons/devicon/icons/symfony/symfony-original-wordmark.svg',
        ],
        [
            'name' => 'React',
            'image' => 'https://cdn.jsdelivr.net/gh/devicons/devicon/icons/react/react-original-wordmark.svg',
        ],
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
        [
            'name' => 'Sass',
            'image' => 'https://cdn.jsdelivr.net/gh/devicons/devicon/icons/sass/sass-original.svg',
        ],
        [
            'name' => 'MySQL',
            'image' => 'https://cdn.jsdelivr.net/gh/devicons/devicon/icons/mysql/mysql-original-wordmark.svg',
        ],
        [
            'name' => 'Git',
            'image' => 'https://cdn.jsdelivr.net/gh/devicons/devicon/icons/git/git-original-wordmark.svg',
        ],
        [
            'name' => 'Linux',
            'image' => 'https://cdn.jsdelivr.net/gh/devicons/devicon/icons/linux/linux-original.svg',
        ],
        [
            'name' => 'Trello',
            'image' => 'https://cdn.jsdelivr.net/gh/devicons/devicon/icons/trello/trello-plain-wordmark.svg',
        ],
        [
            'name' => 'Codepen',
            'image' => 'https://cdn.jsdelivr.net/gh/devicons/devicon/icons/codepen/codepen-original-wordmark.svg',
        ],
        [
            'name' => 'FileZilla',
            'image' => 'https://cdn.jsdelivr.net/gh/devicons/devicon/icons/filezilla/filezilla-plain-wordmark.svg',
        ],
        [
            'name' => 'GitLab',
            'image' => 'https://cdn.jsdelivr.net/gh/devicons/devicon/icons/gitlab/gitlab-original-wordmark.svg',
        ],
        [
            'name' => 'Visual Studio Code',
            'image' => 'https://cdn.jsdelivr.net/gh/devicons/devicon/icons/vscode/vscode-original-wordmark.svg',
        ],
        [
            'name' => 'Apache',
            'image' => 'https://cdn.jsdelivr.net/gh/devicons/devicon/icons/apache/apache-original-wordmark.svg',
        ],
        [
            'name' => 'Babel',
            'image' => 'https://cdn.jsdelivr.net/gh/devicons/devicon/icons/babel/babel-original.svg',
        ],
        [
            'name' => 'docker',
            'image' => 'https://cdn.jsdelivr.net/gh/devicons/devicon/icons/docker/docker-original-wordmark.svg',
        ],
        [
            'name' => 'Figma',
            'image' => 'https://cdn.jsdelivr.net/gh/devicons/devicon/icons/figma/figma-original.svg',
        ],
        [
            'name' => 'Java',
            'image' => 'https://cdn.jsdelivr.net/gh/devicons/devicon/icons/java/java-original-wordmark.svg',
        ],
        [
            'name' => 'jQuery',
            'image' => 'https://cdn.jsdelivr.net/gh/devicons/devicon/icons/jquery/jquery-original-wordmark.svg',
        ],
        [
            'name' => 'Angular',
            'image' => 'https://cdn.jsdelivr.net/gh/devicons/devicon/icons/angularjs/angularjs-original.svg',
        ],
        [
            'name' => 'Laravel',
            'image' => 'https://cdn.jsdelivr.net/gh/devicons/devicon/icons/laravel/laravel-plain-wordmark.svg',
        ],
        [
            'name' => 'Node.js',
            'image' => 'https://cdn.jsdelivr.net/gh/devicons/devicon/icons/nodejs/nodejs-original-wordmark.svg',
        ],
        [
            'name' => 'PostgreSQL',
            'image' => 'https://cdn.jsdelivr.net/gh/devicons/devicon/icons/postgresql/postgresql-original-wordmark.svg',
        ],
        [
            'name' => 'ssh',
            'image' => 'https://cdn.jsdelivr.net/gh/devicons/devicon/icons/ssh/ssh-original-wordmark.svg',
        ],
        [
            'name' => 'Vue.js',
            'image' => 'https://cdn.jsdelivr.net/gh/devicons/devicon/icons/vuejs/vuejs-original-wordmark.svg',
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
