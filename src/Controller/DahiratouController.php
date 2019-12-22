<?php

namespace App\Controller;

use App\Repository\Dahiratou1Repository;
use App\Repository\ProgrammesRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class DahiratouController extends AbstractController
{
    /**
     * @Route("/dahiratou", name="dahiratou")
     */
    public function index(Dahiratou1Repository $dahiratou1Repository, ProgrammesRepository $programmesRepository)
    {
        $dahira = $dahiratou1Repository->findAll();
        $dahira1 = $programmesRepository->findAll();

        return $this->render('dahiratou/index.html.twig', [
           'dahiras' => $dahira,
           'dahiras1' => $dahira1,
        ]);
    }
}
