<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Pharmacy
 *
 * @ORM\Table(name="pharmacy", uniqueConstraints={@ORM\UniqueConstraint(name="UNIQ_D6C15C1E1FDF4367", columns={"pharmacist_id"})}, indexes={@ORM\Index(name="IDX_D6C15C1E8BAC62AF", columns={"city_id"})})
 * @ORM\Entity
 */
class Pharmacy
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    public function __toString(){
        return $this->getName();
    }

    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=255, nullable=false)
     */
    private $name;

    /**
     * @var string|null
     *
     * @ORM\Column(name="sigle", type="string", length=30, nullable=true)
     */
    private $sigle;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="date_creation", type="date", nullable=true)
     */
    private $dateCreation;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="heure_ouverture", type="time", nullable=false)
     */
    private $heureOuverture;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="heure_fermeture", type="time", nullable=false)
     */
    private $heureFermeture;

    /**
     * @var string
     *
     * @ORM\Column(name="longitude", type="string", length=50, nullable=false)
     */
    private $longitude;

    /**
     * @var string
     *
     * @ORM\Column(name="latitude", type="string", length=50, nullable=false)
     */
    private $latitude;

    /**
     * @var string
     *
     * @ORM\Column(name="filename", type="string", length=255, nullable=false)
     */
    private $filename;

    /**
     * @var \Pharmacists
     *
     * @ORM\ManyToOne(targetEntity="Pharmacists")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="pharmacist_id", referencedColumnName="id")
     * })
     */
    private $pharmacist;

    /**
     * @var \City
     *
     * @ORM\ManyToOne(targetEntity="City")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="city_id", referencedColumnName="id")
     * })
     */
    private $city;



    /**
     * Get id.
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set name.
     *
     * @param string $name
     *
     * @return Pharmacy
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get name.
     *
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set sigle.
     *
     * @param string|null $sigle
     *
     * @return Pharmacy
     */
    public function setSigle($sigle = null)
    {
        $this->sigle = $sigle;

        return $this;
    }

    /**
     * Get sigle.
     *
     * @return string|null
     */
    public function getSigle()
    {
        return $this->sigle;
    }

    /**
     * Set dateCreation.
     *
     * @param \DateTime|null $dateCreation
     *
     * @return Pharmacy
     */
    public function setDateCreation($dateCreation = null)
    {
        $this->dateCreation = $dateCreation;

        return $this;
    }

    /**
     * Get dateCreation.
     *
     * @return \DateTime|null
     */
    public function getDateCreation()
    {
        return $this->dateCreation;
    }

    /**
     * Set heureOuverture.
     *
     * @param \DateTime $heureOuverture
     *
     * @return Pharmacy
     */
    public function setHeureOuverture($heureOuverture)
    {
        $this->heureOuverture = $heureOuverture;

        return $this;
    }

    /**
     * Get heureOuverture.
     *
     * @return \DateTime
     */
    public function getHeureOuverture()
    {
        return $this->heureOuverture;
    }

    /**
     * Set heureFermeture.
     *
     * @param \DateTime $heureFermeture
     *
     * @return Pharmacy
     */
    public function setHeureFermeture($heureFermeture)
    {
        $this->heureFermeture = $heureFermeture;

        return $this;
    }

    /**
     * Get heureFermeture.
     *
     * @return \DateTime
     */
    public function getHeureFermeture()
    {
        return $this->heureFermeture;
    }

    /**
     * Set longitude.
     *
     * @param string $longitude
     *
     * @return Pharmacy
     */
    public function setLongitude($longitude)
    {
        $this->longitude = $longitude;

        return $this;
    }

    /**
     * Get longitude.
     *
     * @return string
     */
    public function getLongitude()
    {
        return $this->longitude;
    }

    /**
     * Set latitude.
     *
     * @param string $latitude
     *
     * @return Pharmacy
     */
    public function setLatitude($latitude)
    {
        $this->latitude = $latitude;

        return $this;
    }

    /**
     * Get latitude.
     *
     * @return string
     */
    public function getLatitude()
    {
        return $this->latitude;
    }

    /**
     * Set filename.
     *
     * @param string $filename
     *
     * @return Pharmacy
     */
    public function setFilename($filename)
    {
        $this->filename = $filename;

        return $this;
    }

    /**
     * Get filename.
     *
     * @return string
     */
    public function getFilename()
    {
        return $this->filename;
    }

    /**
     * Set pharmacist.
     *
     * @param \AppBundle\Entity\Pharmacists|null $pharmacist
     *
     * @return Pharmacy
     */
    public function setPharmacist(\AppBundle\Entity\Pharmacists $pharmacist = null)
    {
        $this->pharmacist = $pharmacist;

        return $this;
    }

    /**
     * Get pharmacist.
     *
     * @return \AppBundle\Entity\Pharmacists|null
     */
    public function getPharmacist()
    {
        return $this->pharmacist;
    }

    /**
     * Set city.
     *
     * @param \AppBundle\Entity\City|null $city
     *
     * @return Pharmacy
     */
    public function setCity(\AppBundle\Entity\City $city = null)
    {
        $this->city = $city;

        return $this;
    }

    /**
     * Get city.
     *
     * @return \AppBundle\Entity\City|null
     */
    public function getCity()
    {
        return $this->city;
    }
}
