<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class IndexController extends AbstractController{
    /**
     * @Route ("/", name="index")
     * @Method ({"GET"}) 
     */
    public function index(){
        return $this->render('index.html.twig');
    }

}

    