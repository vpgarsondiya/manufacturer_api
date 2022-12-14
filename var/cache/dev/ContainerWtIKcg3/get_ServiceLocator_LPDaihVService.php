<?php

namespace ContainerWtIKcg3;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_LPDaihVService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.lPDaihV' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.lPDaihV'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'App\\Controller\\ManufacturerController::delete' => ['privates', '.service_locator.9ne0HB0', 'get_ServiceLocator_9ne0HB0Service', true],
            'App\\Controller\\ManufacturerController::edit' => ['privates', '.service_locator.9ne0HB0', 'get_ServiceLocator_9ne0HB0Service', true],
            'App\\Controller\\ManufacturerController::index' => ['privates', '.service_locator.aKM6MDa', 'get_ServiceLocator_AKM6MDaService', true],
            'App\\Controller\\ManufacturerController::new' => ['privates', '.service_locator.aKM6MDa', 'get_ServiceLocator_AKM6MDaService', true],
            'App\\Controller\\ManufacturerController::show' => ['privates', '.service_locator.IQtEzWo', 'get_ServiceLocator_IQtEzWoService', true],
            'App\\Controller\\ProductController::delete' => ['privates', '.service_locator.1QZmUjg', 'get_ServiceLocator_1QZmUjgService', true],
            'App\\Controller\\ProductController::edit' => ['privates', '.service_locator.1QZmUjg', 'get_ServiceLocator_1QZmUjgService', true],
            'App\\Controller\\ProductController::index' => ['privates', '.service_locator.aKM6MDa', 'get_ServiceLocator_AKM6MDaService', true],
            'App\\Controller\\ProductController::new' => ['privates', '.service_locator.aKM6MDa', 'get_ServiceLocator_AKM6MDaService', true],
            'App\\Controller\\ProductController::show' => ['privates', '.service_locator.5OibA2.', 'get_ServiceLocator_5OibA2_Service', true],
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
            'App\\Controller\\ProductController:delete' => ['privates', '.service_locator.1QZmUjg', 'get_ServiceLocator_1QZmUjgService', true],
            'App\\Controller\\ProductController:edit' => ['privates', '.service_locator.1QZmUjg', 'get_ServiceLocator_1QZmUjgService', true],
            'App\\Controller\\ProductController:index' => ['privates', '.service_locator.aKM6MDa', 'get_ServiceLocator_AKM6MDaService', true],
            'App\\Controller\\ProductController:new' => ['privates', '.service_locator.aKM6MDa', 'get_ServiceLocator_AKM6MDaService', true],
            'App\\Controller\\ProductController:show' => ['privates', '.service_locator.5OibA2.', 'get_ServiceLocator_5OibA2_Service', true],
            'kernel:loadRoutes' => ['privates', '.service_locator.xUrKPVU', 'get_ServiceLocator_XUrKPVUService', true],
            'kernel:registerContainerConfiguration' => ['privates', '.service_locator.xUrKPVU', 'get_ServiceLocator_XUrKPVUService', true],
            'kernel:terminate' => ['privates', '.service_locator.bRdave9', 'get_ServiceLocator_BRdave9Service', true],
        ], [
            'App\\Controller\\ManufacturerController::delete' => '?',
            'App\\Controller\\ManufacturerController::edit' => '?',
            'App\\Controller\\ManufacturerController::index' => '?',
            'App\\Controller\\ManufacturerController::new' => '?',
            'App\\Controller\\ManufacturerController::show' => '?',
            'App\\Controller\\ProductController::delete' => '?',
            'App\\Controller\\ProductController::edit' => '?',
            'App\\Controller\\ProductController::index' => '?',
            'App\\Controller\\ProductController::new' => '?',
            'App\\Controller\\ProductController::show' => '?',
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
            'App\\Controller\\ProductController:delete' => '?',
            'App\\Controller\\ProductController:edit' => '?',
            'App\\Controller\\ProductController:index' => '?',
            'App\\Controller\\ProductController:new' => '?',
            'App\\Controller\\ProductController:show' => '?',
            'kernel:loadRoutes' => '?',
            'kernel:registerContainerConfiguration' => '?',
            'kernel:terminate' => '?',
        ]);
    }
}
