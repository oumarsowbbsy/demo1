<?php

namespace App\Controller;

use App\Entity\User;
use App\Form\ProfilType;
use Doctrine\Common\Persistence\ObjectManager;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ProfilController extends AbstractController
{
    /**
     * @Route("/profil", name="profil")
     * @return Response
     */
    public function index(Request $request, ObjectManager $objectManager)
    {
        $user = $this->getUser();
        $form = $this->createForm(ProfilType::class, $user);
        $form->handleRequest($request);
        if($form->isSubmitted() && $form->isValid()){
            $objectManager->persist($user);
            $objectManager->flush();
            $this->addFlash('success', 'Votre Profil a été modifier avec succés !!!');
            return  $this->redirectToRoute('profil2');
        }
        return $this->render('profil/index.html.twig', [
            'form' => $form->createView()
        ]);
    }
    /**
     * @Route("/profil2",name="profil2")
     * @return Response
     */
    public function profil(Request $request){
        $user = $this->getUser();


        return $this->render('profil/profil.html.twig', [
            'users' => $user
        ]);

    }
}
