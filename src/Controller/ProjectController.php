<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ProjectController extends AbstractController
{
    #[Route('/api/projects/test', name: 'api_projects_test', methods: 'GET')]
    public function getProjects(): Response
    {
        $projects = [
            [
                'id' => 1,
                'name' => 'Marché Conclu',
                'description' => "Projet de création (du  1 décembre 2021 au 11 février 2022) d'un site Marché Conclu pour une cliente, en version mobile, à l'école Wild Code School de Reims.",
                'icon' => 'icon8-phone.png',
                'image' => 'marcheconclu.png',
                'link' => 'https://marcheconclu.chavaudreyxavier.fr',
                'github' => 'https://github.com/Superzut44/marche-conclu'
            ],
            [
                'id' => 2,
                'name' => 'Unlock',
                'icon' => 'icon8-laptop-and-phone.png',
                'image' => 'unlock.jpg',
                'description' => "Projet de création (du  21 oct au 13 nov 2021) d'un site fictif de type jeu : escape game ( Unlock! Sherlock adventures ) à l'école Wild Code School de Reims.",
                'link' => 'https://unlock.labetowiez.fr/index.php'
            ],
            [
                'id' => 3,
                'name' => 'Wild Post',
                'icon' => 'icon8-laptop-and-phone.png',
                'image' => 'wild-post.jpg',
                'description' => "Création (du  28 sept au 8 oct 2021) d'un site fictif de type journal sur l'école Wild Code School de Reims.",
                'link' => 'https://chavaudrey.me/Wild-Post/'
            ],
            
        ];
    
        $response = new Response();

        $response->headers->set('Content-Type', 'application/json');
        $response->headers->set('Access-Control-Allow-Origin', '*');

        $response->setContent(json_encode($projects));
        
        return $response;
    }
}
