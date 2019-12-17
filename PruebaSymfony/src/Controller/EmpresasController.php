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
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;

class EmpresasController extends AbstractController{

    /**
     * @Route("/empresa", name="empresa")
     */
    public function Empresas(){
        $empresas = $this->getDoctrine()->getRepository(Empresa::class)->findAll();
        $sector = $this->getDoctrine()->getRepository(Sector::class)->findAll();

        //descomentar para ver estructura de sector y/o empresas
        // var_dump($empresas);
        // var_dump($sector);
        // die();
        
        return $this->render('empresas/lista.html.twig', array('empresas' => $empresas, 'sector' => $sector));
    }

    /**
     * @Route("/empresa/crear", name="crear_empresa")
     */
    public function crearEmpresa(Request $request){
        $empresa = new Empresa();
        
        $form = $this->createForm(EmpresaFormType::class, $empresa, array(
            'action' => $this->generateURL("crear_empresa"),

        ));
       
        $form->handleRequest($request);

        if($form->isSubmitted()){
            //manage request when true
            var_dump($request);
        }

        return $this->render('empresas/crear.html.twig', array(
            'form' => $form->createView()
        ));


            // $task = new Task();

            // // dummy code - this is here just so that the Task has some tags
            // // otherwise, this isn't an interesting example
            // $tag1 = new Tag();
            // $tag1->setName('tag1');
            // $task->getTags()->add($tag1);
            // $tag2 = new Tag();
            // $tag2->setName('tag2');
            // $task->getTags()->add($tag2);
            // // end dummy code

            // $form = $this->createForm(TaskType::class, $task);

            // $form->handleRequest($request);

            // if ($form->isSubmitted() && $form->isValid()) {
            //     // ... maybe do some form processing, like saving the Task and Tag objects
            // }

            // return $this->render('task/new.html.twig', [
            //     'form' => $form->createView(),
            // ]);
         

    }


}