<?php

namespace ContainerXL4MXqV;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getForm_ResolvedTypeFactoryService extends App_KernelTestDebugContainer
{
    /**
     * Gets the private 'form.resolved_type_factory' shared service.
     *
     * @return \Symfony\Component\Form\ResolvedFormTypeFactory
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/form/ResolvedFormTypeFactoryInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/form/ResolvedFormTypeFactory.php';

        return $container->privates['form.resolved_type_factory'] = new \Symfony\Component\Form\ResolvedFormTypeFactory();
    }
}