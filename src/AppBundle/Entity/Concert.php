<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Description of Concert
 *
 * @author pavithra
 */

/**
 * @ORM\Entity
 * @ORM\Table
 */
class Concert {
    /**
     * @ORM\Column(type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;
    
    /**
     * @ORM\Column
     */
    private $nom;
    
    /**
     * @ORM\Column
     */
    private $prix;
    
    /**
     * @ORM\Column
     */
    private $nbrPlace;
    
    /**
     * @ORM\Column(type="date")
     */
    private $date;
    
    
    
    public function getId() {
        return $this->id;
    }

    public function getNom() {
        return $this->nom;
    }
    
    public function setNom($nom) {
        $this->nom = $nom;
    }
    
    public function getPrix() {
        return $this->prix;
    }
    
    public function setPrix($prix) {
        $this->prix = $prix;
    }
    
    public function getNbrPlace() {
        return $this->nbrPlace;
    }
    
    public function setNbrPlace($nbrPlace) {
        $this->nbrPlace = $nbrPlace;
    }
    
    public function getDate() {
        return $this->date;
    }
    
    public function setDate($date) {
        $this->date = $date;
    }
    
    public function getNumAddress() {
        return $this->numAddress;
    }
    
    public function setNumAddress($numAddress) {
        $this->numAddress = $numAddress;
    }
    
    
   
}
