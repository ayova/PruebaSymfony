<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\EmpresaRepository")
 */
class Empresa
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id_empresa;

    /**
     * @ORM\Column(type="text")
     */
    private $nombre_empresa;
    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $tlf_empresa;
    /**
     * @ORM\Column(type="text", nullable=true)
     */
    private $email_empresa;
    /**
     * @ORM\Column(type="integer")
     */
    private $sector_empresa;

    //funciones para obtener info de la base de datos
    public function getId_empresa(){
        return $this->id_empresa;
    }

    public function getNombre_empresa(){
        return $this->nombre_empresa;
    }
    public function setNombre_empresa($nombre_empresa){
        $this->nombre_empresa = $nombre_empresa;
    }

    public function getTlf_empresa(){
        return $this->tlf_empresa;
    }
    public function setTlf_empresa($tlf_empresa){
        $this->tlf_empresa = $tlf_empresa;
    }

    public function getEmail_empresa(){
        return $this->email_empresa;
    }
    public function setEmail_empresa($email_empresa){
        $this->email_empresa = $email_empresa;
    }
    
    public function getSector_empresa(){
        return $this->sector_empresa;
    }

    public function setSector_empresa($sector_empresa){
        $this->sector_empresa = $sector_empresa;
    }

    public function __get($id){
        $getAll = array('id_empresa' => $this->id_empresa,'nombre_empresa' => $this->nombre_empresa,'tlf_empresa' => $this->tlf_empresa,'email_empresa' => $this->email_empresa,'sector_empresa' => $this->sector_empresa);

    }


}
