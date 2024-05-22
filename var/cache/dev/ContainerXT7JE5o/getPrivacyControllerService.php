<?php

namespace ContainerXT7JE5o;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getPrivacyControllerService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'App\Controller\PrivacyController' shared autowired service.
     *
     * @return \App\Controller\PrivacyController
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/framework-bundle/Controller/AbstractController.php';
        include_once \dirname(__DIR__, 4).'/src/Controller/PrivacyController.php';

        $container->services['App\\Controller\\PrivacyController'] = $instance = new \App\Controller\PrivacyController();

        $instance->setContainer(($container->privates['.service_locator.jUv.zyj'] ?? $container->load('get_ServiceLocator_JUv_ZyjService'))->withContext('App\\Controller\\PrivacyController', $container));

        return $instance;
    }
}
