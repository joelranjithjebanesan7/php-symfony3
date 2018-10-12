<?php

namespace AppBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Trsteel\CkeditorBundle\Form\Type\CkeditorType;
use FM\ElfinderBundle\Form\Type\ElFinderType;


use AppBundle\Entity\Question;

class QuestionFormType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('question', CkeditorType::class, ['label' => 'Question', 'required' => true]) 
            ->add('Save', SubmitType::class,array(
                'label' => 'Save')
            );
    }
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => Question::class,
        ));
    }
}
