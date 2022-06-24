<?php

namespace AppBundle\Controller;

use AppBundle\Entity\Regions;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;use Symfony\Component\HttpFoundation\Request;

/**
 * Region controller.
 *
 * @Route("regions")
 */
class RegionsController extends Controller
{
    /**
     * Lists all region entities.
     *
     * @Route("/", name="regions_index")
     * @Method("GET")
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $regions = $em->getRepository('AppBundle:Regions')->findAll();

        return $this->render('regions/index.html.twig', array(
            'regions' => $regions,
        ));
    }

    /**
     * Creates a new region entity.
     *
     * @Route("/new", name="regions_new")
     * @Method({"GET", "POST"})
     */
    public function newAction(Request $request)
    {
        $region = new Regions();
        $form = $this->createForm('AppBundle\Form\RegionsType', $region);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($region);
            $em->flush();

            return $this->redirectToRoute('regions_show', array('id' => $region->getId()));
        }

        return $this->render('regions/new.html.twig', array(
            'region' => $region,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a region entity.
     *
     * @Route("/{id}", name="regions_show")
     * @Method("GET")
     */
    public function showAction(Regions $region)
    {
        $deleteForm = $this->createDeleteForm($region);

        return $this->render('regions/show.html.twig', array(
            'region' => $region,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing region entity.
     *
     * @Route("/{id}/edit", name="regions_edit")
     * @Method({"GET", "POST"})
     */
    public function editAction(Request $request, Regions $region)
    {
        $deleteForm = $this->createDeleteForm($region);
        $editForm = $this->createForm('AppBundle\Form\RegionsType', $region);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('regions_edit', array('id' => $region->getId()));
        }

        return $this->render('regions/edit.html.twig', array(
            'region' => $region,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a region entity.
     *
     * @Route("/{id}", name="regions_delete")
     * @Method("DELETE")
     */
    public function deleteAction(Request $request, Regions $region)
    {
        $form = $this->createDeleteForm($region);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($region);
            $em->flush();
        }

        return $this->redirectToRoute('regions_index');
    }

    /**
     * Creates a form to delete a region entity.
     *
     * @param Regions $region The region entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(Regions $region)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('regions_delete', array('id' => $region->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
