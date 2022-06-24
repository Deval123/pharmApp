<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Examen
 *
 * @ORM\Table(name="examen", uniqueConstraints={@ORM\UniqueConstraint(name="UNIQ_514C8FEC62FF6CDF", columns={"consultation_id"})}, indexes={@ORM\Index(name="IDX_514C8FEC54A4CB53", columns={"personelEts_id"}), @ORM\Index(name="IDX_514C8FECCEC3FD2F", columns={"patients_id"})})
 * @ORM\Entity
 */
class Examen
{
    /**
     * @var string|null
     *
     * @ORM\Column(name="nature", type="string", length=255, nullable=true)
     */
    private $nature;

    /**
     * @var string|null
     *
     * @ORM\Column(name="contenu", type="text", length=0, nullable=true)
     */
    private $contenu;

    /**
     * @var string|null
     *
     * @ORM\Column(name="image", type="string", length=255, nullable=true)
     */
    private $image;

    /**
     * @var string|null
     *
     * @ORM\Column(name="lieuExamen", type="string", length=255, nullable=true)
     */
    private $lieuexamen;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="datecreate", type="datetime", nullable=true)
     */
    private $datecreate;

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
