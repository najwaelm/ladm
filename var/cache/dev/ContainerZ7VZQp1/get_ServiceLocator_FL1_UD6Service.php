<?php

namespace ContainerZ7VZQp1;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_FL1_UD6Service extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.fL1.UD6' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.fL1.UD6'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService ??= $container->getService(...), [
            'aboutUsRepository' => ['privates', 'App\\Repository\\AboutUsRepository', 'getAboutUsRepositoryService', true],
        ], [
            'aboutUsRepository' => 'App\\Repository\\AboutUsRepository',
        ]);
    }
}
