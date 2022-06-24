<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Visite
 *
 * @ORM\Table(name="visite", indexes={@ORM\Index(name="patients_id", columns={"patients_id"})})
 * @ORM\Entity
 */
class Visite
{
    /**
     * @var string
     *
     * @ORM\Column(name="nom", type="string", length=255, nullable=false)
     */
    private $nom;

    /**
     * @var int|null
     *
     * @ORM\Column(name="numero", type="integer", nullable=true)
     */
    private $numero;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="date_realisation", type="date", nullable=true)
     */
    private $dateRealisation;

    /**
     * @var string|null
     *
     * @ORM\Column(name="nom_hopital", type="string", length=255, nullable=true)
     */
    private $nomHopital;

    /**
     * @var string|null
     *
     * @ORM\Column(name="nom_medecin", type="string", length=255, nullable=true)
     */
    private $nomMedecin;

    /**
     * @var float|null
     *
     * @ORM\Column(name="cout", type="float", precision=10, scale=0, nullable=true)
     */
    private $cout;

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
