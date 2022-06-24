<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Traitement
 *
 * @ORM\Table(name="traitement", indexes={@ORM\Index(name="IDX_2A356D27F531F4C5", columns={"hospitalisation_id"}), @ORM\Index(name="IDX_2A356D2754A4CB53", columns={"personelEts_id"})})
 * @ORM\Entity
 */
class Traitement
{
    /**
     * @var string|null
     *
     * @ORM\Column(name="contenu", type="text", length=0, nullable=true)
     */
    private $contenu;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="datecreate", type="datetime", nullable=true)
     */
    private $datecreate;

    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var \AppBundle\Entity\PersonelEts
     *
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\PersonelEts")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="personelEts_id", referencedColumnName="id")
     * })
     */
    private $personelets;

    /**
     * @var \AppBundle\Entity\Hospitalisation
     *
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Hospitalisation")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="hospitalisation_id", referencedColumnName="id")
     * })
     */
    private $hospitalisation;


}
