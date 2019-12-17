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
    public $nombre_empresa;
    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    public $tlf_empresa;
    /**
     * @ORM\Column(type="text", nullable=true)
     */
    public $email_empresa;
    /**
     * @ORM\Column(type="integer")
     */
    public $sector_empresa;


    



    //funciones para obtener info de la base de datos
    public function getId_empresa(){
        return $this->id_empresa;
    }

    public function getNombre_Empresa(){
        return $this->nombre_empresa;
    }
    public function setNombre_Empresa($nombre_empresa){
        $this->nombre_empresa = $nombre_empresa;
    }

    public function getTlf_Empresa(){
        return $this->tlf_empresa;
    }
    public function setTlf_Empresa($tlf_empresa){
        $this->tlf_empresa = $tlf_empresa;
    }

    public function getEmail_Empresa(){
        return $this->email_empresa;
    }
    public function setEmail_Empresa($email_empresa){
        $this->email_empresa = $email_empresa;
    }
    
    public function getSector_Empresa(){
        return $this->sector_empresa;
    }

    public function setSector_Empresa($sector_empresa){
        $this->sector_empresa = $sector_empresa;
    }

    // public function __get($id){
    //     $getAll = array('id_empresa' => $this->id_empresa,'nombre_empresa' => $this->nombre_empresa,'tlf_empresa' => $this->tlf_empresa,'email_empresa' => $this->email_empresa,'sector_empresa' => $this->sector_empresa);

    // }



}
