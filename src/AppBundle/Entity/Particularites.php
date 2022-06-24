<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Particularites
 *
 * @ORM\Table(name="particularites", uniqueConstraints={@ORM\UniqueConstraint(name="UNIQ_A6B74CCF531F4C5", columns={"hospitalisation_id"})})
 * @ORM\Entity
 */
class Particularites
{
    /**
     * @var string|null
     *
     * @ORM\Column(name="Chirurgicale", type="string", length=255, nullable=true)
     */
    private $chirurgicale;

    /**
     * @var string|null
     *
     * @ORM\Column(name="anesthesie", type="string", length=255, nullable=true)
     */
    private $anesthesie;

    /**
     * @var string|null
     *
     * @ORM\Column(name="soinsIntensifs", type="string", length=255, nullable=true)
     */
    private $soinsintensifs;

    /**
     * @var string|null
     *
     * @ORM\Column(name="urgences", type="string", length=255, nullable=true)
     */
    private $urgences;

    /**
     * @var string|null
     *
     * @ORM\Column(name="autres", type="string", length=255, nullable=true)
     */
    private $autres;

    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var \AppBundle\Entity\Hospitalisation
     *
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Hospitalisation")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="hospitalisation_id", referencedColumnName="id")
     * })
     */
    private $hospitalisation;


}
