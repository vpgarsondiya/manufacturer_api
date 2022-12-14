<?php

namespace ContainerXL4MXqV;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getManufacturerTypeService extends App_KernelTestDebugContainer
{
    /**
     * Gets the private 'App\Form\ManufacturerType' shared autowired service.
     *
     * @return \App\Form\ManufacturerType
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/form/FormTypeInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/form/AbstractType.php';
        include_once \dirname(__DIR__, 4).'/src/Form/ManufacturerType.php';

        return $container->privates['App\\Form\\ManufacturerType'] = new \App\Form\ManufacturerType();
    }
}
