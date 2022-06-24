<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Result
 *
 * @ORM\Table(name="result", uniqueConstraints={@ORM\UniqueConstraint(name="UNIQ_136AC1135C8659A", columns={"examen_id"})})
 * @ORM\Entity
 */
class Result
{
    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="dateCreate", type="datetime", nullable=true)
     */
    private $datecreate;

    /**
     * @var string|null
     *
     * @ORM\Column(name="image", type="string", length=255, nullable=true)
     */
    private $image;

    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var \AppBundle\Entity\Examen
     *
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Examen")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="examen_id", referencedColumnName="id")
     * })
     */
    private $examen;


}
