<?php

namespace App\Controller;

use App\Entity\Contact;
use App\Entity\Email;
use App\Form\ContactType;
use App\Form\EmailType;
use App\Repository\AnnonceRepository;
use App\Repository\EventRepository;
use Doctrine\Common\Persistence\ObjectManager;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

class HomeController extends AbstractController
{
    /**
     * @Route("/", name="home")
     */
    public function index(EventRepository $eventRepository, AnnonceRepository $annonceRepository, Request $request,
                          ObjectManager $objectManager,\Swift_Mailer $mailer): Response
    {

        $annonce = $objectManager->createQuery('SELECT u FROM App\Entity\Annonce u ORDER BY u.date DESC')->setMaxResults(6)->getResult();
        $events = $objectManager->createQuery('SELECT a FROM App\Entity\Event a ORDER BY a.date DESC')->getResult();


//        $email = new Email();
//        $form= $this->createForm(EmailType::class,$email);
//        $form->handleRequest($request);
//        $test1 = array('oumarsow92bbsy@gmail.com','oo2sow@gmail.com','babslegrands.bs@gmail.com');
//        foreach ($test1 as $test){
//
//            $emails = $test;
//        }
//
//        if($form->isSubmitted() && $form->isValid()){
//            try{
//                $contactFormData = $form->getData();
//
//                $message = (new \Swift_Message('Test réussie'))
//                    ->setFrom($email->getEmail())
//                    ->setTo($test1)
//                    ->setBody(
//                        $this->renderView(
//
//                            'email/login.html.twig',
//                            ['contenu' => $email->getMessage()]
//                        ),
//                        'text/html'
//                    );
//                $mailer->send($message);
//                $this->addFlash('success', 'Votre email a été envoyé');
//                return $this->redirectToRoute('home');
//            }
//            catch (Exception $e){
//                echo 'Exception reçue : ',  $e->getMessage(), "\n";
//            }
//
//        }
        return $this->render('home/login.html.twig', [
            'events' => $events,
            'annonces' => $annonce

        ]);
    }


}
