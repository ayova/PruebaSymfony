<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use App\Entity\ExampleEntity;
use App\Form\ExampleFormEntity;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;


class ExampleController extends AbstractController
{
    /**
     * @Route("/example", name="example")
     */
    public function index(Request $request)
    {
        $example = new ExampleEntity();

        // $form = $this->createForm(ExampleFormType::class, $example);
        $form = $this->createFormBuilder($example)
        ->add('id', IntegerType::class)
        ->add('name', TextType::class)
        ->add('save', SubmitType::class)
        ->getForm();

        $form->handleRequest($request);

        if($form->isSubmitted()){

            $example = $form->getData();
            var_dump($example);

        }

        return $this->render('example/index.html.twig', [
            'form' => $form->createView(),
        ]);
    }
}
