<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * MaladieChronique
 *
 * @ORM\Table(name="maladie_chronique", indexes={@ORM\Index(name="UNIQ_CDD652AFCEC3FD2F", columns={"patients_id"})})
 * @ORM\Entity
 */
class MaladieChronique
{
    /**
     * @var string
     *
     * @ORM\Column(name="nom", type="string", length=255, nullable=false)
     */
    private $nom;

    /**
     * @var string|null
     *
     * @ORM\Column(name="medecin_traitant", type="string", length=255, nullable=true)
     */
    private $medecinTraitant;

    /**
     * @var string|null
     *
     * @ORM\Column(name="restriction", type="text", length=0, nullable=true)
     */
    private $restriction;

    /**
     * @var string|null
     *
     * @ORM\Column(name="recommandation", type="text", length=0, nullable=true)
     */
    private $recommandation;

    /**
     * @var string|null
     *
     * @ORM\Column(name="commentaire", type="text", length=0, nullable=true)
     */
    private $commentaire;

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
