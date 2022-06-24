<?php

namespace AppBundle\Controller;

use AppBundle\Entity\Sick;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;use Symfony\Component\HttpFoundation\Request;

/**
 * Sick controller.
 *
 * @Route("sick")
 */
class SickController extends Controller
{
    /**
     * Lists all sick entities.
     *
     * @Route("/", name="sick_index")
     * @Method("GET")
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $sicks = $em->getRepository('AppBundle:Sick')->findAll();

        return $this->render('sick/index.html.twig', array(
            'sicks' => $sicks,
        ));
    }

    /**
     * Creates a new sick entity.
     *
     * @Route("/new", name="sick_new")
     * @Method({"GET", "POST"})
     */
    public function newAction(Request $request)
    {
        $sick = new Sick();
        $form = $this->createForm('AppBundle\Form\SickType', $sick);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($sick);
            $em->flush();

            return $this->redirectToRoute('sick_show', array('id' => $sick->getId()));
        }

        return $this->render('sick/new.html.twig', array(
            'sick' => $sick,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a sick entity.
     *
     * @Route("/{id}", name="sick_show")
     * @Method("GET")
     */
    public function showAction(Sick $sick)
    {
        $deleteForm = $this->createDeleteForm($sick);

        return $this->render('sick/show.html.twig', array(
            'sick' => $sick,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing sick entity.
     *
     * @Route("/{id}/edit", name="sick_edit")
     * @Method({"GET", "POST"})
     */
    public function editAction(Request $request, Sick $sick)
    {
        $deleteForm = $this->createDeleteForm($sick);
        $editForm = $this->createForm('AppBundle\Form\SickType', $sick);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('sick_edit', array('id' => $sick->getId()));
        }

        return $this->render('sick/edit.html.twig', array(
            'sick' => $sick,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a sick entity.
     *
     * @Route("/{id}", name="sick_delete")
     * @Method("DELETE")
     */
    public function deleteAction(Request $request, Sick $sick)
    {
        $form = $this->createDeleteForm($sick);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($sick);
            $em->flush();
        }

        return $this->redirectToRoute('sick_index');
    }

    /**
     * Creates a form to delete a sick entity.
     *
     * @param Sick $sick The sick entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(Sick $sick)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('sick_delete', array('id' => $sick->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
