<?php

namespace App\Controller;

use App\Entity\ResumeSubmission;
use App\Form\ResumeSubmissionType;
use App\Repository\ResumeSubmissionRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

#[Route('/resume/submission')]
class ResumeSubmissionController extends AbstractController
{
    #[Route('/', name: 'app_resume_submission_index', methods: ['GET'])]
    public function index(ResumeSubmissionRepository $resumeSubmissionRepository): Response
    {
        return $this->render('resume_submission/index.html.twig', [
            'resume_submissions' => $resumeSubmissionRepository->findAll(),
        ]);
    }

    #[Route('/new', name: 'app_resume_submission_new', methods: ['GET', 'POST'])]
    public function new(Request $request, EntityManagerInterface $entityManager): Response
    {
        $resumeSubmission = new ResumeSubmission();
        $form = $this->createForm(ResumeSubmissionType::class, $resumeSubmission);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->persist($resumeSubmission);
            $entityManager->flush();

            return $this->redirectToRoute('app_resume_submission_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('resume_submission/new.html.twig', [
            'resume_submission' => $resumeSubmission,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'app_resume_submission_show', methods: ['GET'])]
    public function show(ResumeSubmission $resumeSubmission): Response
    {
        return $this->render('resume_submission/show.html.twig', [
            'resume_submission' => $resumeSubmission,
        ]);
    }

    #[Route('/{id}/edit', name: 'app_resume_submission_edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, ResumeSubmission $resumeSubmission, EntityManagerInterface $entityManager): Response
    {
        $form = $this->createForm(ResumeSubmissionType::class, $resumeSubmission);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->flush();

            return $this->redirectToRoute('app_resume_submission_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('resume_submission/edit.html.twig', [
            'resume_submission' => $resumeSubmission,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'app_resume_submission_delete', methods: ['POST'])]
    public function delete(Request $request, ResumeSubmission $resumeSubmission, EntityManagerInterface $entityManager): Response
    {
        if ($this->isCsrfTokenValid('delete'.$resumeSubmission->getId(), $request->getPayload()->getString('_token'))) {
            $entityManager->remove($resumeSubmission);
            $entityManager->flush();
        }

        return $this->redirectToRoute('app_resume_submission_index', [], Response::HTTP_SEE_OTHER);
    }
}
