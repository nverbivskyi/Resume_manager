<?php

namespace ContainerRWLOnV7;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getResume2Service extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.errored..service_locator.LsXnsId.App\Entity\Resume' shared service.
     *
     * @return \App\Entity\Resume
     */
    public static function do($container, $lazyLoad = true)
    {
        throw new RuntimeException('Cannot autowire service ".service_locator.LsXnsId": it needs an instance of "App\\Entity\\Resume" but this type has been excluded in "config/services.yaml".');
    }
}
