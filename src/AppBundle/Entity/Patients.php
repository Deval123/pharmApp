<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Patients
 *
 * @ORM\Table(name="patients", indexes={@ORM\Index(name="IDX_2CCC2E2CF92F3E70", columns={"country_id"})})
 * @ORM\Entity
 */
class Patients
{
    /**
     * @var string
     *
     * @ORM\Column(name="nom", type="string", length=255, nullable=false)
     */
    private $nom;

    /**
     * @var string
     *
     * @ORM\Column(name="password", type="string", length=255, nullable=false)
     */
    private $password;

    /**
     * @var string|null
     *
     * @ORM\Column(name="telephone", type="string", length=255, nullable=true)
     */
    private $telephone;

    /**
     * @var string|null
     *
     * @ORM\Column(name="telephone1", type="string", length=255, nullable=true)
     */
    private $telephone1;

    /**
     * @var string
     *
     * @ORM\Column(name="email", type="string", length=255, nullable=false)
     */
    private $email;

    /**
     * @var string|null
     *
     * @ORM\Column(name="email1", type="string", length=255, nullable=true)
     */
    private $email1;

    /**
     * @var string
     *
     * @ORM\Column(name="prenom", type="string", length=150, nullable=false)
     */
    private $prenom;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="anneeNais", type="date", nullable=true)
     */
    private $anneenais;

    /**
     * @var string|null
     *
     * @ORM\Column(name="lieuNais", type="string", length=255, nullable=true)
     */
    private $lieunais;

    /**
     * @var string|null
     *
     * @ORM\Column(name="profession", type="string", length=255, nullable=true)
     */
    private $profession;

    /**
     * @var string|null
     *
     * @ORM\Column(name="filename", type="string", length=255, nullable=true)
     */
    private $filename;

    /**
     * @var string|null
     *
     * @ORM\Column(name="lieuService", type="string", length=255, nullable=true)
     */
    private $lieuservice;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="dateCreate", type="datetime", nullable=true)
     */
    private $datecreate;

    /**
     * @var string|null
     *
     * @ORM\Column(name="telBureau", type="string", length=255, nullable=true)
     */
    private $telbureau;

    /**
     * @var string|null
     *
     * @ORM\Column(name="residencePrincipal", type="string", length=255, nullable=true)
     */
    private $residenceprincipal;

    /**
     * @var string|null
     *
     * @ORM\Column(name="residenceSecondaire", type="string", length=255, nullable=true)
     */
    private $residencesecondaire;

    /**
     * @var string|null
     *
     * @ORM\Column(name="nomPere", type="string", length=255, nullable=true)
     */
    private $nompere;

    /**
     * @var string|null
     *
     * @ORM\Column(name="telPere", type="string", length=255, nullable=true)
     */
    private $telpere;

    /**
     * @var string|null
     *
     * @ORM\Column(name="emailPere", type="string", length=255, nullable=true)
     */
    private $emailpere;

    /**
     * @var string|null
     *
     * @ORM\Column(name="professionPere", type="string", length=255, nullable=true)
     */
    private $professionpere;

    /**
     * @var string|null
     *
     * @ORM\Column(name="quartierPere", type="string", length=255, nullable=true)
     */
    private $quartierpere;

    /**
     * @var string|null
     *
     * @ORM\Column(name="ruePere", type="string", length=255, nullable=true)
     */
    private $ruepere;

    /**
     * @var string|null
     *
     * @ORM\Column(name="nomMere", type="string", length=255, nullable=true)
     */
    private $nommere;

    /**
     * @var string|null
     *
     * @ORM\Column(name="telMere", type="string", length=255, nullable=true)
     */
    private $telmere;

    /**
     * @var string|null
     *
     * @ORM\Column(name="emailMere", type="string", length=255, nullable=true)
     */
    private $emailmere;

    /**
     * @var string|null
     *
     * @ORM\Column(name="professionMere", type="string", length=255, nullable=true)
     */
    private $professionmere;

    /**
     * @var string|null
     *
     * @ORM\Column(name="quartierMere", type="string", length=255, nullable=true)
     */
    private $quartiermere;

    /**
     * @var string|null
     *
     * @ORM\Column(name="rueMere", type="string", length=255, nullable=true)
     */
    private $ruemere;

    /**
     * @var string|null
     *
     * @ORM\Column(name="nomTuteur", type="string", length=255, nullable=true)
     */
    private $nomtuteur;

    /**
     * @var string|null
     *
     * @ORM\Column(name="telTuteur", type="string", length=255, nullable=true)
     */
    private $teltuteur;

    /**
     * @var string|null
     *
     * @ORM\Column(name="emailTuteur", type="string", length=255, nullable=true)
     */
    private $emailtuteur;

    /**
     * @var string|null
     *
     * @ORM\Column(name="professionTuteur", type="string", length=255, nullable=true)
     */
    private $professiontuteur;

    /**
     * @var string|null
     *
     * @ORM\Column(name="quartierTuteur", type="string", length=255, nullable=true)
     */
    private $quartiertuteur;

    /**
     * @var string|null
     *
     * @ORM\Column(name="rueTuteur", type="string", length=255, nullable=true)
     */
    private $ruetuteur;

    /**
     * @var string|null
     *
     * @ORM\Column(name="proche1", type="string", length=100, nullable=true)
     */
    private $proche1;

    /**
     * @var string|null
     *
     * @ORM\Column(name="tel_proche1", type="string", length=50, nullable=true)
     */
    private $telProche1;

    /**
     * @var string|null
     *
     * @ORM\Column(name="emailProche1", type="string", length=50, nullable=true)
     */
    private $emailproche1;

    /**
     * @var string|null
     *
     * @ORM\Column(name="residenceProche1", type="string", length=50, nullable=true)
     */
    private $residenceproche1;

    /**
     * @var string|null
     *
     * @ORM\Column(name="professionProche1", type="string", length=50, nullable=true)
     */
    private $professionproche1;

    /**
     * @var string|null
     *
     * @ORM\Column(name="proche2", type="string", length=100, nullable=true)
     */
    private $proche2;

    /**
     * @var string|null
     *
     * @ORM\Column(name="tel_proche2", type="string", length=50, nullable=true)
     */
    private $telProche2;

    /**
     * @var string|null
     *
     * @ORM\Column(name="emailProche2", type="string", length=50, nullable=true)
     */
    private $emailproche2;

    /**
     * @var string|null
     *
     * @ORM\Column(name="residenceProche2", type="string", length=50, nullable=true)
     */
    private $residenceproche2;

    /**
     * @var string|null
     *
     * @ORM\Column(name="professionProche2", type="string", length=50, nullable=true)
     */
    private $professionproche2;

    /**
     * @var string|null
     *
     * @ORM\Column(name="proche3", type="string", length=100, nullable=true)
     */
    private $proche3;

    /**
     * @var string|null
     *
     * @ORM\Column(name="tel_proche3", type="string", length=50, nullable=true)
     */
    private $telProche3;

    /**
     * @var string|null
     *
     * @ORM\Column(name="emailProche3", type="string", length=50, nullable=true)
     */
    private $emailproche3;

    /**
     * @var string|null
     *
     * @ORM\Column(name="residenceProche3", type="string", length=50, nullable=true)
     */
    private $residenceproche3;

    /**
     * @var string|null
     *
     * @ORM\Column(name="professionProche3", type="string", length=50, nullable=true)
     */
    private $professionproche3;

    /**
     * @var string|null
     *
     * @ORM\Column(name="groupeSanguin", type="string", length=50, nullable=true)
     */
    private $groupesanguin;

    /**
     * @var string|null
     *
     * @ORM\Column(name="allergie", type="string", length=200, nullable=true)
     */
    private $allergie;

    /**
     * @var string|null
     *
     * @ORM\Column(name="incapacite", type="string", length=200, nullable=true)
     */
    private $incapacite;

    /**
     * @var string|null
     *
     * @ORM\Column(name="medecinFamille", type="string", length=200, nullable=true)
     */
    private $medecinfamille;

    /**
     * @var string|null
     *
     * @ORM\Column(name="assurance", type="string", length=200, nullable=true)
     */
    private $assurance;

    /**
     * @var string|null
     *
     * @ORM\Column(name="rhesus", type="string", length=50, nullable=true)
     */
    private $rhesus;

    /**
     * @var string|null
     *
     * @ORM\Column(name="observationPhisyque", type="string", length=50, nullable=true)
     */
    private $observationphisyque;

    /**
     * @var string|null
     *
     * @ORM\Column(name="signeParticulier", type="string", length=50, nullable=true)
     */
    private $signeparticulier;

    /**
     * @var string|null
     *
     * @ORM\Column(name="sexe", type="string", length=25, nullable=true)
     */
    private $sexe;

    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var \AppBundle\Entity\Country
     *
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Country")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="country_id", referencedColumnName="id")
     * })
     */
    private $country;


}
