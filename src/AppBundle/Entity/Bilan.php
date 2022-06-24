<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Bilan
 *
 * @ORM\Table(name="bilan", indexes={@ORM\Index(name="patients_id", columns={"patients_id"})})
 * @ORM\Entity
 */
class Bilan
{
    /**
     * @var string
     *
     * @ORM\Column(name="intitule", type="text", length=65535, nullable=false)
     */
    private $intitule;

    /**
     * @var float|null
     *
     * @ORM\Column(name="temperature", type="float", precision=10, scale=0, nullable=true)
     */
    private $temperature;

    /**
     * @var float|null
     *
     * @ORM\Column(name="taille", type="float", precision=10, scale=0, nullable=true)
     */
    private $taille;

    /**
     * @var float|null
     *
     * @ORM\Column(name="tension", type="float", precision=10, scale=0, nullable=true)
     */
    private $tension;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="dateCreate", type="datetime", nullable=true)
     */
    private $datecreate;

    /**
     * @var float|null
     *
     * @ORM\Column(name="poidsActuel", type="float", precision=10, scale=0, nullable=true)
     */
    private $poidsactuel;

    /**
     * @var float|null
     *
     * @ORM\Column(name="poidsNormal", type="float", precision=10, scale=0, nullable=true)
     */
    private $poidsnormal;

    /**
     * @var float|null
     *
     * @ORM\Column(name="imc", type="float", precision=10, scale=0, nullable=true)
     */
    private $imc;

    /**
     * @var float|null
     *
     * @ORM\Column(name="tgc", type="float", precision=10, scale=0, nullable=true)
     */
    private $tgc;

    /**
     * @var float|null
     *
     * @ORM\Column(name="masseMinEraleOsseuse", type="float", precision=10, scale=0, nullable=true)
     */
    private $massemineraleosseuse;

    /**
     * @var float|null
     *
     * @ORM\Column(name="pourcentageEau", type="float", precision=10, scale=0, nullable=true)
     */
    private $pourcentageeau;

    /**
     * @var float|null
     *
     * @ORM\Column(name="masseMusculaire", type="float", precision=10, scale=0, nullable=true)
     */
    private $massemusculaire;

    /**
     * @var float|null
     *
     * @ORM\Column(name="evaluationSihouette", type="float", precision=10, scale=0, nullable=true)
     */
    private $evaluationsihouette;

    /**
     * @var float|null
     *
     * @ORM\Column(name="tgViscerale", type="float", precision=10, scale=0, nullable=true)
     */
    private $tgviscerale;

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
