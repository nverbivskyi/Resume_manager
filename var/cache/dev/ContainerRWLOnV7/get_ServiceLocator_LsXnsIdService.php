<?php

namespace ContainerRWLOnV7;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_LsXnsIdService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.LsXnsId' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.LsXnsId'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService ??= $container->getService(...), [
            'resume' => ['privates', '.errored..service_locator.LsXnsId.App\\Entity\\Resume', NULL, 'Cannot autowire service ".service_locator.LsXnsId": it needs an instance of "App\\Entity\\Resume" but this type has been excluded in "config/services.yaml".'],
        ], [
            'resume' => 'App\\Entity\\Resume',
        ]);
    }
}
