<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Ordonance
 *
 * @ORM\Table(name="ordonance", uniqueConstraints={@ORM\UniqueConstraint(name="UNIQ_99240B9C62FF6CDF", columns={"consultation_id"})}, indexes={@ORM\Index(name="IDX_99240B9C54A4CB53", columns={"personelEts_id"})})
 * @ORM\Entity
 */
class Ordonance
{
    /**
     * @var string|null
     *
     * @ORM\Column(name="contenu", type="text", length=0, nullable=true)
     */
    private $contenu;

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
