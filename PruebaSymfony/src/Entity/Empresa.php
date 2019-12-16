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
     * @ORM\Column(type="integer")
     */
    public $tlf_empresa;
    /**
     * @ORM\Column(type="text")
     */
    public $email_empresa;
    /**
     * @ORM\Column(type="integer")
     */
    public $sector_empresa;


}
