<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Hospitalisation
 *
 * @ORM\Table(name="hospitalisation", indexes={@ORM\Index(name="IDX_67C05959CEC3FD2F", columns={"patients_id"}), @ORM\Index(name="IDX_67C0595954A4CB53", columns={"personelEts_id"}), @ORM\Index(name="UNIQ_67C0595962FF6CDF", columns={"consultation_id"})})
 * @ORM\Entity
 */
class Hospitalisation
{
    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="date_entree", type="datetime", nullable=true)
     */
    private $dateEntree;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="date_sortie", type="datetime", nullable=true)
     */
    private $dateSortie;

    /**
     * @var string|null
     *
     * @ORM\Column(name="nom_hopital", type="string", length=255, nullable=true)
     */
    private $nomHopital;

    /**
     * @var string|null
     *
     * @ORM\Column(name="causes", type="text", length=0, nullable=true)
     */
    private $causes;

    /**
     * @var string|null
     *
     * @ORM\Column(name="symptomes", type="text", length=0, nullable=true)
     */
    private $symptomes;

    /**
     * @var string|null
     *
     * @ORM\Column(name="diagnostique", type="text", length=0, nullable=true)
     */
    private $diagnostique;

    /**
     * @var string|null
     *
     * @ORM\Column(name="medecinTraitant", type="string", length=100, nullable=true)
     */
    private $medecintraitant;

    /**
     * @var string|null
     *
     * @ORM\Column(name="recommandationsAlimentaire", type="text", length=0, nullable=true)
     */
    private $recommandationsalimentaire;

    /**
     * @var int|null
     *
     * @ORM\Column(name="numeroChambre", type="integer", nullable=true)
     */
    private $numerochambre;

    /**
     * @var int|null
     *
     * @ORM\Column(name="numeroLit", type="integer", nullable=true)
     */
    private $numerolit;

    /**
     * @var int|null
     *
     * @ORM\Column(name="numeroDossier", type="integer", nullable=true)
     */
    private $numerodossier;

    /**
     * @var string|null
     *
     * @ORM\Column(name="image", type="string", length=255, nullable=true)
     */
    private $image;

    /**
     * @var string|null
     *
     * @ORM\Column(name="lieuHospitalisation", type="string", length=255, nullable=true)
     */
    private $lieuhospitalisation;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="datecreate", type="datetime", nullable=true)
     */
    private $datecreate;

    /**
     * @var string|null
     *
     * @ORM\Column(name="nature", type="string", length=255, nullable=true)
     */
    private $nature;

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
