<?php

namespace App\Controller;

use App\Repository\ProjectRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ProjectController extends AbstractController
{
    #[Route('/api/projects/test', name: 'api_projects_test', methods: 'GET')]
    public function getProjects(ProjectRepository $projectRepository): Response
    {
        return $this->json($projectRepository->findAll(), 200,[], ['groups' => 'project:read']);
    }
}
