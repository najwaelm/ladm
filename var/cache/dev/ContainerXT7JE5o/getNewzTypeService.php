<?php

namespace ContainerXT7JE5o;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getNewzTypeService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'App\Form\NewzType' shared autowired service.
     *
     * @return \App\Form\NewzType
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/form/FormTypeInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/form/AbstractType.php';
        include_once \dirname(__DIR__, 4).'/src/Form/NewzType.php';

        return $container->privates['App\\Form\\NewzType'] = new \App\Form\NewzType();
    }
}
