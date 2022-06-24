<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Parametres
 *
 * @ORM\Table(name="parametres", uniqueConstraints={@ORM\UniqueConstraint(name="UNIQ_1A79799D62FF6CDF", columns={"consultation_id"})}, indexes={@ORM\Index(name="IDX_1A79799D54A4CB53", columns={"personelEts_id"})})
 * @ORM\Entity
 */
class Parametres
{
    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="datecreate", type="datetime", nullable=true)
     */
    private $datecreate;

    /**
     * @var float|null
     *
     * @ORM\Column(name="ta", type="float", precision=10, scale=0, nullable=true)
     */
    private $ta;

    /**
     * @var float|null
     *
     * @ORM\Column(name="db", type="float", precision=10, scale=0, nullable=true)
     */
    private $db;

    /**
     * @var float|null
     *
     * @ORM\Column(name="bg", type="float", precision=10, scale=0, nullable=true)
     */
    private $bg;

    /**
     * @var float|null
     *
     * @ORM\Column(name="pouls", type="float", precision=10, scale=0, nullable=true)
     */
    private $pouls;

    /**
     * @var float|null
     *
     * @ORM\Column(name="taille", type="float", precision=10, scale=0, nullable=true)
     */
    private $taille;

    /**
     * @var float|null
     *
     * @ORM\Column(name="ddr", type="float", precision=10, scale=0, nullable=true)
     */
    private $ddr;

    /**
     * @var float|null
     *
     * @ORM\Column(name="dpa", type="float", precision=10, scale=0, nullable=true)
     */
    private $dpa;

    /**
     * @var float|null
     *
     * @ORM\Column(name="tension", type="float", precision=10, scale=0, nullable=true)
     */
    private $tension;

    /**
     * @var float|null
     *
     * @ORM\Column(name="poids", type="float", precision=10, scale=0, nullable=true)
     */
    private $poids;

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


}
