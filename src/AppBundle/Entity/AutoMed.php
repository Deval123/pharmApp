<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * AutoMed
 *
 * @ORM\Table(name="auto_med", indexes={@ORM\Index(name="UNIQ_CDD652AFCEC3FD2F", columns={"patients_id"})})
 * @ORM\Entity
 */
class AutoMed
{
    /**
     * @var \DateTime
     *
     * @ORM\Column(name="datecreate", type="datetime", nullable=false)
     */
    private $datecreate;

    /**
     * @var string
     *
     * @ORM\Column(name="symtome", type="text", length=0, nullable=false)
     */
    private $symtome;

    /**
     * @var string
     *
     * @ORM\Column(name="traitement", type="text", length=0, nullable=false)
     */
    private $traitement;

    /**
     * @var string|null
     *
     * @ORM\Column(name="evaluation", type="text", length=0, nullable=true)
     */
    private $evaluation;

    /**
     * @var string|null
     *
     * @ORM\Column(name="observation", type="text", length=0, nullable=true)
     */
    private $observation;

    /**
     * @var float|null
     *
     * @ORM\Column(name="cout_traitement", type="float", precision=10, scale=0, nullable=true)
     */
    private $coutTraitement;

    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

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
