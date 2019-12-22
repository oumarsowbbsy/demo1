<?php

namespace App\Controller;

use Doctrine\Common\Persistence\ObjectManager;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class DashbordController extends AbstractController
{
    /**
     * @Route("/dashbord", name="dashbord")
     */
    public function dashbord(ObjectManager $manager)
    {
        $users = $manager->createQuery('SELECT COUNT(u) FROM App\Entity\User u')->getSingleScalarResult();
        $annonces = $manager->createQuery('SELECT COUNT(u) FROM App\Entity\Annonce u')->getSingleScalarResult();
        $audios = $manager->createQuery('SELECT COUNT(u) FROM App\Entity\Audio u')->getSingleScalarResult();
        $events = $manager->createQuery('SELECT COUNT(u) FROM App\Entity\Event u')->getSingleScalarResult();
        $photos = $manager->createQuery('SELECT COUNT(u) FROM App\Entity\Photo u')->getSingleScalarResult();
        $videos = $manager->createQuery('SELECT COUNT(u) FROM App\Entity\Video u')->getSingleScalarResult();
        return $this->render('dashbord/index.html.twig', [
              'users' => $users,
              'annonces' => $annonces,
              'audios' => $audios,
              'events' => $events,
              'photos' => $photos,
              'videos' => $videos,
        ]);
    }
}
