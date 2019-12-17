<?php

namespace App\Controller;

use App\Form\EmpresaFormType; // entidad de la base de datos
use App\Entity\Empresa; // entidad de la base de datos
use App\Entity\Sector; // entidad de la base de datos
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Form\Form;
use Symfony\Component\Routing\Annotation\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;

class EmpresasController extends AbstractController{

    /**
     * @Route("/empresa", name="empresa")
     */
    public function Empresas(){
        $empresas = $this->getDoctrine()->getRepository(Empresa::class)->findAll();
        $sector = $this->getDoctrine()->getRepository(Sector::class)->findAll();
        return $this->render('empresas/lista.html.twig', array('empresas' => $empresas, 'sector' => $sector));
    }

    /**
     * @Route("/empresa/crear", name="crear_empresa")
     * @Method({"GET","POST"})
     */
    public function crearEmpresa(Request $request){
        $empresa = new Empresa();
        
        $form = $this->createFormBuilder($empresa)
        ->add('nombre_empresa', TextType::class, array('required'=>true,))
        ->add('tlf_empresa', IntegerType::class, array('required'=>false,))
        ->add('email_empresa', TextType::class, array('required'=>false,))
        ->add('sector_empresa', IntegerType::class, array('required'=>true,))
        ->add('save', SubmitType::class, array('attr'=>array('class'=>'btn btn-success')))
        ->getForm();
       
        $form->handleRequest($request);

        if($form->isSubmitted()){
            //manage request when true
            $empresa = $form->getData();

            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($empresa);
            $entityManager->flush();

            return $this->redirectToRoute("empresa");
        }

        return $this->render('empresas/crear.html.twig', array(
            'form' => $form->createView()
        ));

         

    }


}