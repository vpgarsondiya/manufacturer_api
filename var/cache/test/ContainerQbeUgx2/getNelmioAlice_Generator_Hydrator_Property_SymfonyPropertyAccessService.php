<?php

namespace ContainerQbeUgx2;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getNelmioAlice_Generator_Hydrator_Property_SymfonyPropertyAccessService extends App_KernelTestDebugContainer
{
    /**
     * Gets the private 'nelmio_alice.generator.hydrator.property.symfony_property_access' shared service.
     *
     * @return \Nelmio\Alice\Generator\Hydrator\Property\SymfonyPropertyAccessorHydrator
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/nelmio/alice/src/Generator/Hydrator/PropertyHydratorInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/nelmio/alice/src/IsAServiceTrait.php';
        include_once \dirname(__DIR__, 4).'/vendor/nelmio/alice/src/Generator/Hydrator/Property/SymfonyPropertyAccessorHydrator.php';

        return $container->privates['nelmio_alice.generator.hydrator.property.symfony_property_access'] = new \Nelmio\Alice\Generator\Hydrator\Property\SymfonyPropertyAccessorHydrator(($container->privates['nelmio_alice.property_accessor.std'] ?? $container->load('getNelmioAlice_PropertyAccessor_StdService')));
    }
}
