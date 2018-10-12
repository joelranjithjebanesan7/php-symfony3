<?php

namespace AppBundle\Controller;

use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\HttpFoundation\Request;

use AppBundle\Entity;
use AppBundle\Form\QuestionFormType;
use AppBundle\Entity\Question;


class FormUserController extends Controller{

/** 
  * @Route("/list/", name="form_user__list_page")
  */
  public function list(){

    return $this->render('AppBundle:Templates:list_page.twig.html',array());
    }

/** 
  * @Route("/list/create/", name="form_user__create_page")
*/
public function create(Request $request){

    $message = "Create your message";
    $question_form = new Question();
    $form = $this->createForm(QuestionFormType::class, $question_form);


  /**  $form = $this->createFormBuilder([])
            *->add('question',  TextType::class, ['label' => 'Question', 'required' => true]) 
            *->add('Save', SubmitType::class,['label' => 'Save'])
        *->getForm();
    **/$form->handleRequest($request);
    if ($form->isSubmitted() and $form->isValid()){
        $question = $form->get('question')->getData();
        $entityManager = $this->getDoctrine()->getManager();
        $entityQuestion = new Entity\Question();
        $entityQuestion
            ->setQuestion($question);
        $entityManager->persist($entityQuestion);
        $entityManager->flush();
    }

    return $this->render('AppBundle:Templates:create_page.twig.html',['form'=> $form->createview(),'message' =>$message]);
     }


    
}