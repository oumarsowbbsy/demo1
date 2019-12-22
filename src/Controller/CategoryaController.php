<?php

namespace App\Controller;

use App\Entity\Categorya;
use App\Form\CategoryaType;
use App\Repository\CategoryaRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/categorya")
 */
class CategoryaController extends AbstractController
{
    /**
     * @Route("/", name="categorya_index", methods={"GET"})
     */
    public function index(CategoryaRepository $categoryaRepository): Response
    {
        return $this->render('categorya/login.html.twig', [
            'categoryas' => $categoryaRepository->findAll(),
        ]);
    }

    /**
     * @Route("/new", name="categorya_new", methods={"GET","POST"})
     */
    public function new(Request $request): Response
    {
        $categorya = new Categorya();
        $form = $this->createForm(CategoryaType::class, $categorya);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($categorya);
            $entityManager->flush();

            return $this->redirectToRoute('categorya_index');
        }

        return $this->render('categorya/new.html.twig', [
            'categorya' => $categorya,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="categorya_show", methods={"GET"})
     */
    public function show(Categorya $categorya): Response
    {
        return $this->render('categorya/show.html.twig', [
            'categorya' => $categorya,
        ]);
    }

    /**
     * @Route("/{id}/edit", name="categorya_edit", methods={"GET","POST"})
     */
    public function edit(Request $request, Categorya $categorya): Response
    {
        $form = $this->createForm(CategoryaType::class, $categorya);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('categorya_index');
        }

        return $this->render('categorya/edit.html.twig', [
            'categorya' => $categorya,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="categorya_delete", methods={"DELETE"})
     */
    public function delete(Request $request, Categorya $categorya): Response
    {
        if ($this->isCsrfTokenValid('delete'.$categorya->getId(), $request->request->get('_token'))) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->remove($categorya);
            $entityManager->flush();
        }

        return $this->redirectToRoute('categorya_index');
    }
}
