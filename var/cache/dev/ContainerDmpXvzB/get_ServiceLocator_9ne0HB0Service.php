<?php

namespace ContainerDmpXvzB;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_9ne0HB0Service extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.9ne0HB0' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.9ne0HB0'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'entityManager' => ['services', 'doctrine.orm.default_entity_manager', 'getDoctrine_Orm_DefaultEntityManagerService', false],
            'manufacturer' => ['privates', '.errored..service_locator.9ne0HB0.App\\Entity\\Manufacturer', NULL, 'Cannot autowire service ".service_locator.9ne0HB0": it references class "App\\Entity\\Manufacturer" but no such service exists.'],
        ], [
            'entityManager' => '?',
            'manufacturer' => 'App\\Entity\\Manufacturer',
        ]);
    }
}
