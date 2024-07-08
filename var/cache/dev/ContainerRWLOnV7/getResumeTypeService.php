<?php

namespace ContainerRWLOnV7;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getResumeTypeService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'App\Form\ResumeType' shared autowired service.
     *
     * @return \App\Form\ResumeType
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/form/FormTypeInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/form/AbstractType.php';
        include_once \dirname(__DIR__, 4).'/src/Form/ResumeType.php';

        return $container->privates['App\\Form\\ResumeType'] = new \App\Form\ResumeType();
    }
}
