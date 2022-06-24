<?php

namespace AppBundle\Controller;

use AppBundle\Entity\Pharmacy;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;use Symfony\Component\HttpFoundation\Request;

/**
 * Pharmacy controller.
 *
 * @Route("pharmacy")
 */
class PharmacyController extends Controller
{
    /**
     * Lists all pharmacy entities.
     *
     * @Route("/", name="pharmacy_index")
     * @Method("GET")
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $pharmacies = $em->getRepository('AppBundle:Pharmacy')->findAll();

        return $this->render('pharmacy/index.html.twig', array(
            'pharmacies' => $pharmacies,
        ));
    }

    /**
     * Creates a new pharmacy entity.
     *
     * @Route("/new", name="pharmacy_new")
     * @Method({"GET", "POST"})
     */
    public function newAction(Request $request)
    {
        $pharmacy = new Pharmacy();
        $form = $this->createForm('AppBundle\Form\PharmacyType', $pharmacy);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($pharmacy);
            $em->flush();

            return $this->redirectToRoute('pharmacy_show', array('id' => $pharmacy->getId()));
        }

        return $this->render('pharmacy/new.html.twig', array(
            'pharmacy' => $pharmacy,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a pharmacy entity.
     *
     * @Route("/{id}", name="pharmacy_show")
     * @Method("GET")
     */
    public function showAction(Pharmacy $pharmacy)
    {
        $deleteForm = $this->createDeleteForm($pharmacy);

        return $this->render('pharmacy/show.html.twig', array(
            'pharmacy' => $pharmacy,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing pharmacy entity.
     *
     * @Route("/{id}/edit", name="pharmacy_edit")
     * @Method({"GET", "POST"})
     */
    public function editAction(Request $request, Pharmacy $pharmacy)
    {
        $deleteForm = $this->createDeleteForm($pharmacy);
        $editForm = $this->createForm('AppBundle\Form\PharmacyType', $pharmacy);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('pharmacy_edit', array('id' => $pharmacy->getId()));
        }

        return $this->render('pharmacy/edit.html.twig', array(
            'pharmacy' => $pharmacy,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a pharmacy entity.
     *
     * @Route("/{id}", name="pharmacy_delete")
     * @Method("DELETE")
     */
    public function deleteAction(Request $request, Pharmacy $pharmacy)
    {
        $form = $this->createDeleteForm($pharmacy);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($pharmacy);
            $em->flush();
        }

        return $this->redirectToRoute('pharmacy_index');
    }

    /**
     * Creates a form to delete a pharmacy entity.
     *
     * @param Pharmacy $pharmacy The pharmacy entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(Pharmacy $pharmacy)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('pharmacy_delete', array('id' => $pharmacy->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
