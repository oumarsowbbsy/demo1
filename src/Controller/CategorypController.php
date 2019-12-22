<?php

namespace App\Controller;

use App\Entity\Categoryp;
use App\Form\CategorypType;
use App\Repository\CategorypRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/categoryp")
 */
class CategorypController extends AbstractController
{
    /**
     * @Route("/", name="categoryp_index", methods={"GET"})
     */
    public function index(CategorypRepository $categorypRepository): Response
    {
        return $this->render('categoryp/login.html.twig', [
            'categoryps' => $categorypRepository->findAll(),
        ]);
    }

    /**
     * @Route("/new", name="categoryp_new", methods={"GET","POST"})
     */
    public function new(Request $request): Response
    {
        $categoryp = new Categoryp();
        $form = $this->createForm(CategorypType::class, $categoryp);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($categoryp);
            $entityManager->flush();

            return $this->redirectToRoute('categoryp_index');
        }

        return $this->render('categoryp/new.html.twig', [
            'categoryp' => $categoryp,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="categoryp_show", methods={"GET"})
     */
    public function show(Categoryp $categoryp): Response
    {
        return $this->render('categoryp/show.html.twig', [
            'categoryp' => $categoryp,
        ]);
    }

    /**
     * @Route("/{id}/edit", name="categoryp_edit", methods={"GET","POST"})
     */
    public function edit(Request $request, Categoryp $categoryp): Response
    {
        $form = $this->createForm(CategorypType::class, $categoryp);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('categoryp_index');
        }

        return $this->render('categoryp/edit.html.twig', [
            'categoryp' => $categoryp,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="categoryp_delete", methods={"DELETE"})
     */
    public function delete(Request $request, Categoryp $categoryp): Response
    {
        if ($this->isCsrfTokenValid('delete'.$categoryp->getId(), $request->request->get('_token'))) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->remove($categoryp);
            $entityManager->flush();
        }

        return $this->redirectToRoute('categoryp_index');
    }
}
