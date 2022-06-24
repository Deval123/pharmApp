<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Patientsagenda
 *
 * @ORM\Table(name="patientsagenda", uniqueConstraints={@ORM\UniqueConstraint(name="UNIQ_2FBE726562FF6CDF", columns={"consultation_id"})}, indexes={@ORM\Index(name="patients_id", columns={"patients_id"}), @ORM\Index(name="IDX_2FBE726554A4CB53", columns={"personelEts_id"})})
 * @ORM\Entity
 */
class Patientsagenda
{
    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="datedebut", type="datetime", nullable=true)
     */
    private $datedebut;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="datefin", type="datetime", nullable=true)
     */
    private $datefin;

    /**
     * @var string|null
     *
     * @ORM\Column(name="nature", type="string", length=255, nullable=true)
     */
    private $nature;

    /**
     * @var string|null
     *
     * @ORM\Column(name="lieu", type="string", length=255, nullable=true)
     */
    private $lieu;

    /**
     * @var string|null
     *
     * @ORM\Column(name="observation", type="text", length=0, nullable=true)
     */
    private $observation;

    /**
     * @var string|null
     *
     * @ORM\Column(name="tiers", type="string", length=255, nullable=true)
     */
    private $tiers;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="datefin1", type="datetime", nullable=true)
     */
    private $datefin1;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="datefin2", type="datetime", nullable=true)
     */
    private $datefin2;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="datefin3", type="datetime", nullable=true)
     */
    private $datefin3;

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
     * @var \AppBundle\Entity\PersonelEts
     *
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\PersonelEts")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="personelEts_id", referencedColumnName="id")
     * })
     */
    private $personelets;

    /**
     * @var \AppBundle\Entity\Consultation
     *
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Consultation")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="consultation_id", referencedColumnName="id")
     * })
     */
    private $consultation;

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
