<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ParamRegime
 *
 * @ORM\Table(name="param_regime", indexes={@ORM\Index(name="UNIQ_F25609CA35E7D534", columns={"regime_id"})})
 * @ORM\Entity
 */
class ParamRegime
{
    /**
     * @var float
     *
     * @ORM\Column(name="poids", type="float", precision=10, scale=0, nullable=false)
     */
    private $poids;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="dateParam", type="datetime", nullable=false)
     */
    private $dateparam;

    /**
     * @var float|null
     *
     * @ORM\Column(name="temperature", type="float", precision=10, scale=0, nullable=true)
     */
    private $temperature;

    /**
     * @var float|null
     *
     * @ORM\Column(name="tension", type="float", precision=10, scale=0, nullable=true)
     */
    private $tension;

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
     * @var \AppBundle\Entity\Regime
     *
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Regime")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="regime_id", referencedColumnName="id")
     * })
     */
    private $regime;


}
