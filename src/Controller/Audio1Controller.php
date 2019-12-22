<?php

namespace App\Controller;

use App\Repository\AudioRepository;
use App\Repository\CategoryaRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;



class Audio1Controller extends AbstractController
{
    /**
     * @Route("/audio1", name="audio1", methods={"GET"})
     */
    public function index(CategoryaRepository $categoryaRepository):Response
    {
       // dd($categoryaRepository->findAll());
        return $this->render('audio1/login.html.twig', [
            'categories' => $categoryaRepository->findAll(),

        ]);
    }

    /**
     * @Route("/biblio", name="bibliotheque_audio", methods={"GET"})
     */
    public function index1(AudioRepository $audioRepository, Request $request)
    {
        $uri = $_SERVER['REQUEST_URI'];

        $category1 = $request->query->get('category_id');

        return $this->render('audio1/audiocategory.html.twig', [
            'audios' => $audioRepository->findAll(),
            'category1' => $category1,
        ]);
    }
}
