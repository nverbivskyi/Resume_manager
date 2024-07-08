<?php

namespace ContainerRWLOnV7;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_BWNVHx_Service extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.bWNVHx.' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.bWNVHx.'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService ??= $container->getService(...), [
            'resumeSubmission' => ['privates', '.errored..service_locator.bWNVHx..App\\Entity\\ResumeSubmission', NULL, 'Cannot autowire service ".service_locator.bWNVHx.": it needs an instance of "App\\Entity\\ResumeSubmission" but this type has been excluded in "config/services.yaml".'],
        ], [
            'resumeSubmission' => 'App\\Entity\\ResumeSubmission',
        ]);
    }
}
