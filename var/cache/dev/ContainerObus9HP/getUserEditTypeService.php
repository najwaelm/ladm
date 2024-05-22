<?php

namespace ContainerObus9HP;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getUserEditTypeService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'App\Form\UserEditType' shared autowired service.
     *
     * @return \App\Form\UserEditType
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/form/FormTypeInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/form/AbstractType.php';
        include_once \dirname(__DIR__, 4).'/src/Form/UserEditType.php';

        $a = ($container->services['doctrine.orm.default_entity_manager'] ?? self::getDoctrine_Orm_DefaultEntityManagerService($container));

        if (isset($container->privates['App\\Form\\UserEditType'])) {
            return $container->privates['App\\Form\\UserEditType'];
        }

        return $container->privates['App\\Form\\UserEditType'] = new \App\Form\UserEditType(($container->privates['security.helper'] ?? $container->load('getSecurity_HelperService')), $a);
    }
}
