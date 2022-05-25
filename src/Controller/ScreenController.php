<?php

namespace App\Controller;

use App\Entity\Screen;
use App\Form\ScreenType;
use App\Repository\ScreenRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\IsGranted;

#[Route('/screen')]
class ScreenController extends AbstractController
{
    #[Route('/index', name: 'app_screen_index', methods: ['GET'])]
    public function index(ScreenRepository $screenRepository): Response
    {
        return $this->render('screen/index.html.twig', [
            'screens' => $screenRepository->findAll(),
        ]);
    }

    #[IsGranted('ROLE_ADMIN')]
    #[Route('/new', name: 'app_screen_new', methods: ['GET', 'POST'])]
    public function new(Request $request, ScreenRepository $screenRepository): Response
    {
        $screen = new Screen();
        $form = $this->createForm(ScreenType::class, $screen);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $screenRepository->add($screen);
            return $this->redirectToRoute('app_screen_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('screen/new.html.twig', [
            'screen' => $screen,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'app_screen_show', methods: ['GET'])]
    public function show(Screen $screen): Response
    {
        return $this->render('screen/show.html.twig', [
            'screen' => $screen,
        ]);
    }

    #[IsGranted('ROLE_ADMIN')]
    #[Route('/{id}/edit', name: 'app_screen_edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, Screen $screen, ScreenRepository $screenRepository): Response
    {
        $form = $this->createForm(ScreenType::class, $screen);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $screenRepository->add($screen);
            return $this->redirectToRoute('app_screen_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('screen/edit.html.twig', [
            'screen' => $screen,
            'form' => $form,
        ]);
    }

    #[IsGranted('ROLE_ADMIN')]
    #[Route('/{id}', name: 'app_screen_delete', methods: ['POST'])]
    public function delete(Request $request, Screen $screen, ScreenRepository $screenRepository): Response
    {
        if ($this->isCsrfTokenValid('delete'.$screen->getId(), $request->request->get('_token'))) {
            $screenRepository->remove($screen);
        }

        return $this->redirectToRoute('app_screen_index', [], Response::HTTP_SEE_OTHER);
    }
}
