<?php

namespace App\Controller;

use App\Repository\ResumeSubmissionRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class StatisticsController extends AbstractController
{
    #[Route('/statistics', name: 'statistics')]
    public function index(ResumeSubmissionRepository $submissionRepository): Response
    {
        $mostPositiveResume = $submissionRepository->findMostPositiveResume();

        return $this->render('statistics/index.html.twig', [
            'mostPositiveResume' => $mostPositiveResume,
        ]);
    }
}
