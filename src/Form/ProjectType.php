<?php

namespace App\Form;

use App\Entity\Project;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\DateType;

class ProjectType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('name')
            ->add('description')
            ->add('image')
            ->add('github')
            ->add('link')
            ->add('languages', null, [
                'choice_label' => 'name',
                'required'      => true,
                'multiple' => true
                ])
            ->add('tools', null, [
                'choice_label' => 'name',
                'required'      => true,
                'multiple' => true
                ])
            ->add('screen', null, [
                'choice_label' => 'name',
                'required'      => true
                ])
            ->add('startThe', DateType::class, [
                'format' => 'yyyy-MM-dd'
                ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Project::class,
        ]);
    }
}
