<?php

namespace App\Controller;

use App\Repository\CategoryvRepository;
use App\Repository\VideoRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;

class VideoCController extends AbstractController
{
    /**
     * @Route("/video/c", name="video_c")
     */
    public function index(CategoryvRepository $categoryvRepository)
    {
        //dd($categoryvRepository->findAll());
        return $this->render('video_c/login.html.twig', [
            'categoryvideo' => $categoryvRepository ->findAll(),

        ]);
    }

    /**
     * @Route("/video/albums", name="video_album")
     */
    public function index1(VideoRepository $videoRepository, Request $request){
        //dd($videoRepository->findAll());
        $element = $request->query->get('category_id');
        return $this->render('video_c/index1.html.twig', [
            'videosc' => $videoRepository->findAll(),
            'element' => $element,
        ]);
    }
}
