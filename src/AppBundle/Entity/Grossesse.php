<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Grossesse
 *
 * @ORM\Table(name="grossesse", indexes={@ORM\Index(name="UNIQ_CDD652AFCEC3FD2F", columns={"patients_id"})})
 * @ORM\Entity
 */
class Grossesse
{
    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="date_debut", type="date", nullable=true)
     */
    private $dateDebut;

    /**
     * @var int
     *
     * @ORM\Column(name="rang", type="integer", nullable=false)
     */
    private $rang;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="date_accouchement", type="date", nullable=true)
     */
    private $dateAccouchement;

    /**
     * @var string
     *
     * @ORM\Column(name="note", type="string", length=255, nullable=false)
     */
    private $note;

    /**
     * @var string|null
     *
     * @ORM\Column(name="type_accouchement", type="string", length=255, nullable=true)
     */
    private $typeAccouchement;

    /**
     * @var string|null
     *
     * @ORM\Column(name="verdict", type="string", length=255, nullable=true)
     */
    private $verdict;

    /**
     * @var string|null
     *
     * @ORM\Column(name="observation", type="text", length=0, nullable=true)
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
     * @var \AppBundle\Entity\Patients
     *
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Patients")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="patients_id", referencedColumnName="id")
     * })
     */
    private $patients;


}
