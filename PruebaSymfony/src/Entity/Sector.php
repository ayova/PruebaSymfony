<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\SectorRepository")
 */
class Sector
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id_sector;

    /**
     * @ORM\Column(type="text")
     */
    private $nombre_sector;
    
    public function getId_sector(){
        return $this->id_sector;
    }

    public function getNombre_sector(){
        return $this->nombre_sector;
    }

    public function setNombre_sector($nombre_sector){
        $this->nombre_sector = $nombre_sector;
    }
}
