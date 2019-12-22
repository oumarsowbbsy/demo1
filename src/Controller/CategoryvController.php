<?php

namespace App\Controller;

use App\Entity\Categoryv;
use App\Form\CategoryvType;
use App\Repository\CategoryvRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/categoryv")
 */
class CategoryvController extends AbstractController
{
    /**
     * @Route("/", name="categoryv_index", methods={"GET"})
     */
    public function index(CategoryvRepository $categoryvRepository): Response
    {
        return $this->render('categoryv/login.html.twig', [
            'categoryvs' => $categoryvRepository->findAll(),
        ]);
    }

    /**
     * @Route("/new", name="categoryv_new", methods={"GET","POST"})
     */
    public function new(Request $request): Response
    {
        $categoryv = new Categoryv();
        $form = $this->createForm(CategoryvType::class, $categoryv);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($categoryv);
            $entityManager->flush();

            return $this->redirectToRoute('categoryv_index');
        }

        return $this->render('categoryv/new.html.twig', [
            'categoryv' => $categoryv,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="categoryv_show", methods={"GET"})
     */
    public function show(Categoryv $categoryv): Response
    {
        return $this->render('categoryv/show.html.twig', [
            'categoryv' => $categoryv,
        ]);
    }

    /**
     * @Route("/{id}/edit", name="categoryv_edit", methods={"GET","POST"})
     */
    public function edit(Request $request, Categoryv $categoryv): Response
    {
        $form = $this->createForm(CategoryvType::class, $categoryv);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('categoryv_index');
        }

        return $this->render('categoryv/edit.html.twig', [
            'categoryv' => $categoryv,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="categoryv_delete", methods={"DELETE"})
     */
    public function delete(Request $request, Categoryv $categoryv): Response
    {
        if ($this->isCsrfTokenValid('delete'.$categoryv->getId(), $request->request->get('_token'))) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->remove($categoryv);
            $entityManager->flush();
        }

        return $this->redirectToRoute('categoryv_index');
    }
}
