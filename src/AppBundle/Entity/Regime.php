<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Regime
 *
 * @ORM\Table(name="regime", indexes={@ORM\Index(name="patients_id", columns={"patients_id"})})
 * @ORM\Entity
 */
class Regime
{
    /**
     * @var string
     *
     * @ORM\Column(name="type_regime", type="string", length=255, nullable=false)
     */
    private $typeRegime;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="datedebut", type="datetime", nullable=false)
     */
    private $datedebut;

    /**
     * @var float
     *
     * @ORM\Column(name="poidsDepart", type="float", precision=10, scale=0, nullable=false)
     */
    private $poidsdepart;

    /**
     * @var string|null
     *
     * @ORM\Column(name="imc", type="string", length=255, nullable=true)
     */
    private $imc;

    /**
     * @var string|null
     *
     * @ORM\Column(name="restrictions", type="text", length=0, nullable=true)
     */
    private $restrictions;

    /**
     * @var float|null
     *
     * @ORM\Column(name="taille", type="float", precision=10, scale=0, nullable=true)
     */
    private $taille;

    /**
     * @var string|null
     *
     * @ORM\Column(name="natureRegime", type="string", length=255, nullable=true)
     */
    private $natureregime;

    /**
     * @var string|null
     *
     * @ORM\Column(name="alimentationRecommande", type="text", length=0, nullable=true)
     */
    private $alimentationrecommande;

    /**
     * @var string|null
     *
     * @ORM\Column(name="typeTraitement", type="text", length=0, nullable=true)
     */
    private $typetraitement;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="dateFin", type="datetime", nullable=false)
     */
    private $datefin;

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
