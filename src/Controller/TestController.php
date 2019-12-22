<?php

namespace App\Controller;

use App\Repository\EventRepository;
use App\Repository\PhotoRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use App\Entity\Event;
use App\Form\EventType;
use App\Repository\CategorypRepository;

class TestController extends AbstractController
{
    /**
     * @Route("/album", name="album", methods={"GET"})
     */
    public function index(CategorypRepository $eventRepository)
    {

        return $this->render('test/login.html.twig', [
            'photos' => $eventRepository->findAll(),
        ]);
    }
    /**
     * @Route("/category", name="album_photo", methods={"GET"})
     */
    public function index1(PhotoRepository $eventRepository, Request $request)
    {
        $uri = $_SERVER['REQUEST_URI'];

        $category1 = $request->query->get('category_id');

        return $this->render('test/index1.html.twig', [
            'photos' => $eventRepository->findAll(),
            'category1' => $category1,

        ]);
    }
}
