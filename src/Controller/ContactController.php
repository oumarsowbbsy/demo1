<?php

namespace App\Controller;

use App\Entity\Email;
use App\Form\EmailType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;

class ContactController extends AbstractController
{
    /**
     * @Route("/contact", name="contact")
     */
    public function contact( Request $request, \Swift_Mailer $mailer)
    {
        $email = new Email();
        $form= $this->createForm(EmailType::class,$email);
        $form->handleRequest($request);
        $test1 = array('oumarsow92bbsy@gmail.com','oo2sow@gmail.com','babslegrands.bs@gmail.com');
        foreach ($test1 as $test){

            $emails = $test;
        }

        if($form->isSubmitted() && $form->isValid()){
            try{
                $contactFormData = $form->getData();

                $message = (new \Swift_Message('Abonnement'))
                    ->setFrom($email->getEmail())
                    ->setTo($test1)
                    ->setBody(
                        $this->renderView(

                            'email/login.html.twig',
                            ['contenu' => $email->getMessage()]
                        ),
                        'text/html'
                    );
                $mailer->send($message);
                $this->addFlash('success', 'Votre email a été envoyé');
                return $this->redirectToRoute('home');
            }
            catch (Exception $e){
                echo 'Exception reçue : ',  $e->getMessage(), "\n";
            }

        }
        return $this->render('contact/index.html.twig', [
            'form' => $form->createView(),
        ]);
    }
}
