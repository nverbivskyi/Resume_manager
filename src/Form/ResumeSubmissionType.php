<?php

namespace App\Form;

use App\Entity\Resume;
use App\Entity\ResumeSubmission;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class ResumeSubmissionType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('submissionDate', null, [
                'widget' => 'single_text',
            ])
            ->add('companyName')
            ->add('positiveFeedback')
            ->add('resume', EntityType::class, [
                'class' => Resume::class,
                'choice_label' => 'id',
            ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => ResumeSubmission::class,
        ]);
    }
}
