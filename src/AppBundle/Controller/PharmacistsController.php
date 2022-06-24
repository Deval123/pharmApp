<?php

namespace AppBundle\Controller;

use AppBundle\Entity\Pharmacists;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;use Symfony\Component\HttpFoundation\Request;

/**
 * Pharmacist controller.
 *
 * @Route("pharmacists")
 */
class PharmacistsController extends Controller
{
    /**
     * Lists all pharmacist entities.
     *
     * @Route("/", name="pharmacists_index")
     * @Method("GET")
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $pharmacists = $em->getRepository('AppBundle:Pharmacists')->findAll();

        return $this->render('pharmacists/index.html.twig', array(
            'pharmacists' => $pharmacists,
        ));
    }

    /**
     * Creates a new pharmacist entity.
     *
     * @Route("/new", name="pharmacists_new")
     * @Method({"GET", "POST"})
     */
    public function newAction(Request $request)
    {
        $pharmacist = new Pharmacists();
        $form = $this->createForm('AppBundle\Form\PharmacistsType', $pharmacist);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($pharmacist);
            $em->flush();

            return $this->redirectToRoute('pharmacists_show', array('id' => $pharmacist->getId()));
        }

        return $this->render('pharmacists/new.html.twig', array(
            'pharmacist' => $pharmacist,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a pharmacist entity.
     *
     * @Route("/{id}", name="pharmacists_show")
     * @Method("GET")
     */
    public function showAction(Pharmacists $pharmacist)
    {
        $deleteForm = $this->createDeleteForm($pharmacist);

        return $this->render('pharmacists/show.html.twig', array(
            'pharmacist' => $pharmacist,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing pharmacist entity.
     *
     * @Route("/{id}/edit", name="pharmacists_edit")
     * @Method({"GET", "POST"})
     */
    public function editAction(Request $request, Pharmacists $pharmacist)
    {
        $deleteForm = $this->createDeleteForm($pharmacist);
        $editForm = $this->createForm('AppBundle\Form\PharmacistsType', $pharmacist);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('pharmacists_edit', array('id' => $pharmacist->getId()));
        }

        return $this->render('pharmacists/edit.html.twig', array(
            'pharmacist' => $pharmacist,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a pharmacist entity.
     *
     * @Route("/{id}", name="pharmacists_delete")
     * @Method("DELETE")
     */
    public function deleteAction(Request $request, Pharmacists $pharmacist)
    {
        $form = $this->createDeleteForm($pharmacist);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($pharmacist);
            $em->flush();
        }

        return $this->redirectToRoute('pharmacists_index');
    }

    /**
     * Creates a form to delete a pharmacist entity.
     *
     * @param Pharmacists $pharmacist The pharmacist entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(Pharmacists $pharmacist)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('pharmacists_delete', array('id' => $pharmacist->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
