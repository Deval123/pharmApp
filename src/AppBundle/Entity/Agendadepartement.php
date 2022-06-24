<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Agendadepartement
 *
 * @ORM\Table(name="agendadepartement", indexes={@ORM\Index(name="IDX_18A743E3CEC3FD2F", columns={"patients_id"}), @ORM\Index(name="IDX_18A743E399C0B38B", columns={"PersonelEts_id"})})
 * @ORM\Entity
 */
class Agendadepartement
{
    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="date_realisation", type="date", nullable=true)
     */
    private $dateRealisation;

    /**
     * @var string|null
     *
     * @ORM\Column(name="type_programme", type="string", length=255, nullable=true)
     */
    private $typeProgramme;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="date_debut", type="datetime", nullable=true)
     */
    private $dateDebut;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="date_fin", type="datetime", nullable=true)
     */
    private $dateFin;

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
     *   @ORM\JoinColumn(name="PersonelEts_id", referencedColumnName="id")
     * })
     */
    private $personelets;

    /**
     * @var \AppBundle\Entity\Patients
     *
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Patients")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="patients_id", referencedColumnName="id")
     * })
     */
    private $patients;


}
