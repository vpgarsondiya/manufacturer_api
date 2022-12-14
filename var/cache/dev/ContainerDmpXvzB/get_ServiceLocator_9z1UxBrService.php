<?php

namespace ContainerDmpXvzB;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_9z1UxBrService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.9z1UxBr' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.9z1UxBr'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'App\\Controller\\ManufacturerController::delete' => ['privates', '.service_locator.9ne0HB0', 'get_ServiceLocator_9ne0HB0Service', true],
            'App\\Controller\\ManufacturerController::edit' => ['privates', '.service_locator.9ne0HB0', 'get_ServiceLocator_9ne0HB0Service', true],
            'App\\Controller\\ManufacturerController::index' => ['privates', '.service_locator.aKM6MDa', 'get_ServiceLocator_AKM6MDaService', true],
            'App\\Controller\\ManufacturerController::new' => ['privates', '.service_locator.aKM6MDa', 'get_ServiceLocator_AKM6MDaService', true],
            'App\\Controller\\ManufacturerController::show' => ['privates', '.service_locator.IQtEzWo', 'get_ServiceLocator_IQtEzWoService', true],
            'App\\Kernel::loadRoutes' => ['privates', '.service_locator.xUrKPVU', 'get_ServiceLocator_XUrKPVUService', true],
            'App\\Kernel::registerContainerConfiguration' => ['privates', '.service_locator.xUrKPVU', 'get_ServiceLocator_XUrKPVUService', true],
            'App\\Kernel::terminate' => ['privates', '.service_locator.bRdave9', 'get_ServiceLocator_BRdave9Service', true],
            'kernel::loadRoutes' => ['privates', '.service_locator.xUrKPVU', 'get_ServiceLocator_XUrKPVUService', true],
            'kernel::registerContainerConfiguration' => ['privates', '.service_locator.xUrKPVU', 'get_ServiceLocator_XUrKPVUService', true],
            'kernel::terminate' => ['privates', '.service_locator.bRdave9', 'get_ServiceLocator_BRdave9Service', true],
            'App\\Controller\\ManufacturerController:delete' => ['privates', '.service_locator.9ne0HB0', 'get_ServiceLocator_9ne0HB0Service', true],
            'App\\Controller\\ManufacturerController:edit' => ['privates', '.service_locator.9ne0HB0', 'get_ServiceLocator_9ne0HB0Service', true],
            'App\\Controller\\ManufacturerController:index' => ['privates', '.service_locator.aKM6MDa', 'get_ServiceLocator_AKM6MDaService', true],
            'App\\Controller\\ManufacturerController:new' => ['privates', '.service_locator.aKM6MDa', 'get_ServiceLocator_AKM6MDaService', true],
            'App\\Controller\\ManufacturerController:show' => ['privates', '.service_locator.IQtEzWo', 'get_ServiceLocator_IQtEzWoService', true],
            'kernel:loadRoutes' => ['privates', '.service_locator.xUrKPVU', 'get_ServiceLocator_XUrKPVUService', true],
            'kernel:registerContainerConfiguration' => ['privates', '.service_locator.xUrKPVU', 'get_ServiceLocator_XUrKPVUService', true],
            'kernel:terminate' => ['privates', '.service_locator.bRdave9', 'get_ServiceLocator_BRdave9Service', true],
        ], [
            'App\\Controller\\ManufacturerController::delete' => '?',
            'App\\Controller\\ManufacturerController::edit' => '?',
            'App\\Controller\\ManufacturerController::index' => '?',
            'App\\Controller\\ManufacturerController::new' => '?',
            'App\\Controller\\ManufacturerController::show' => '?',
            'App\\Kernel::loadRoutes' => '?',
            'App\\Kernel::registerContainerConfiguration' => '?',
            'App\\Kernel::terminate' => '?',
            'kernel::loadRoutes' => '?',
            'kernel::registerContainerConfiguration' => '?',
            'kernel::terminate' => '?',
            'App\\Controller\\ManufacturerController:delete' => '?',
            'App\\Controller\\ManufacturerController:edit' => '?',
            'App\\Controller\\ManufacturerController:index' => '?',
            'App\\Controller\\ManufacturerController:new' => '?',
            'App\\Controller\\ManufacturerController:show' => '?',
            'kernel:loadRoutes' => '?',
            'kernel:registerContainerConfiguration' => '?',
            'kernel:terminate' => '?',
        ]);
    }
}
