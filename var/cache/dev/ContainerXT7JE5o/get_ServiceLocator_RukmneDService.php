<?php

namespace ContainerXT7JE5o;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_RukmneDService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.RukmneD' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.RukmneD'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService ??= $container->getService(...), [
            'newz' => ['privates', '.errored..service_locator.RukmneD.App\\Entity\\Newz', NULL, 'Cannot autowire service ".service_locator.RukmneD": it needs an instance of "App\\Entity\\Newz" but this type has been excluded in "config/services.yaml".'],
        ], [
            'newz' => 'App\\Entity\\Newz',
        ]);
    }
}
