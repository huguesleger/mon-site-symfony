<?php

namespace AdminBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints\File as File;

/**
 * Admin
 *
 * @ORM\Table(name="projetweb")
 * @ORM\Entity(repositoryClass="AdminBundle\Repository\AdminRepository")
 */
class Admin
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     * @ORM\Column(name="images", type="string", length=512)
     */
    private $images;
    
    /**
     * @var string
     * @ORM\Column(name="imgMin", type="string", length=512)
     */
    private $imgMin;
    
    /**
     * @var string
     *
     * @ORM\Column(name="description", type="string", length=255)
     */
    private $description;

    /**
     * @var string
     *
     * @ORM\Column(name="client", type="string", length=255)
     */
    private $client;

    /**
     * @var string
     *
     * @ORM\Column(name="annees", type="string", length=255)
     */
    private $annees;

    /**
     * @var string
     *
     * @ORM\Column(name="nom", type="string", length=255)
     */
    private $nom;

    /**
     * @var string
     *
     * @ORM\Column(name="realisation", type="string", length=255)
     */
    private $realisation;


    /**
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set images
     *
     * @param string $images
     *
     * @return Admin
     */
    public function setImages($images)
    {
        $this->images = $images;

        return $this;
    }

    /**
     * Get images
     *
     * @return string
     */
    public function getImages()
    {
        return $this->images;
    }
    
    /**
     * Set imgMin
     *
     * @param string $imgMin
     *
     * @return Admin
     */
    public function setImgMin($imgMin)
    {
        $this->imgMin = $imgMin;

        return $this;
    }

    /**
     * Get imgMin
     *
     * @return string
     */
    public function getImgMin()
    {
        return $this->imgMin;
    }
    
    /**
     * Set description
     *
     * @param string $description
     *
     * @return Admin
     */
    public function setDescription($description)
    {
        $this->description = $description;

        return $this;
    }

    /**
     * Get description
     *
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Set client
     *
     * @param string $client
     *
     * @return Admin
     */
    public function setClient($client)
    {
        $this->client = $client;

        return $this;
    }

    /**
     * Get client
     *
     * @return string
     */
    public function getClient()
    {
        return $this->client;
    }

    /**
     * Set annees
     *
     * @param string $annees
     *
     * @return Admin
     */
    public function setAnnees($annees)
    {
        $this->annees = $annees;

        return $this;
    }

    /**
     * Get annees
     *
     * @return string
     */
    public function getAnnees()
    {
        return $this->annees;
    }

    /**
     * Set nom
     *
     * @param string $nom
     *
     * @return Admin
     */
    public function setNom($nom)
    {
        $this->nom = $nom;

        return $this;
    }

    /**
     * Get nom
     *
     * @return string
     */
    public function getNom()
    {
        return $this->nom;
    }

   
    /**
     * Set realisation
     *
     * @param string $realisation
     *
     * @return Admin
     */
    public function setRealisation($realisation)
    {
        $this->realisation = $realisation;

        return $this;
    }

    /**
     * Get realisation
     *
     * @return string
     */
    public function getRealisation()
    {
        return $this->realisation;
    }
}

