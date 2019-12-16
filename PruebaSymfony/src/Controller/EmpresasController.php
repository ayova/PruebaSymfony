<?php

namespace App\Controller;

use App\Entity\Empresa; // entidad de la base de datos
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class EmpresasController extends AbstractController{

    /**
     * @Route("/empresas")
     */
    public function Empresas(){
        $empresas = $this->getDoctrine()->getRepository(Empresa::class)->findAll();

        return $this->render('empresas/lista.html.twig', array('empresas' => $empresas));


    }
}