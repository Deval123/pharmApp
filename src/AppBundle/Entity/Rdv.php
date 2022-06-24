<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Rdv
 *
 * @ORM\Table(name="rdv", indexes={@ORM\Index(name="IDX_10C31F8654A4CB53", columns={"personelEts_id"})})
 * @ORM\Entity
 */
class Rdv
{
    /**
     * @var \DateTime
     *
     * @ORM\Column(name="datedebut", type="datetime", nullable=false)
     */
    private $datedebut;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="datefin", type="datetime", nullable=false)
     */
    private $datefin;

    /**
     * @var string|null
     *
     * @ORM\Column(name="nature", type="string", length=125, nullable=true)
     */
    private $nature;

    /**
     * @var string|null
     *
     * @ORM\Column(name="mobile", type="string", length=150, nullable=true)
     */
    private $mobile;

    /**
     * @var string|null
     *
     * @ORM\Column(name="patient", type="string", length=100, nullable=true)
     */
    private $patient;

    /**
     * @var string|null
     *
     * @ORM\Column(name="lieu", type="string", length=255, nullable=true)
     */
    private $lieu;

    /**
     * @var string|null
     *
     * @ORM\Column(name="nommedecin", type="string", length=255, nullable=true)
     */
    private $nommedecin;

    /**
     * @var string|null
     *
     * @ORM\Column(name="observation", type="string", length=255, nullable=true)
     */
    private $observation;

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


}
