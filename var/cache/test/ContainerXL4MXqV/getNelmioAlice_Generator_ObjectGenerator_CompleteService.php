<?php

namespace ContainerXL4MXqV;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getNelmioAlice_Generator_ObjectGenerator_CompleteService extends App_KernelTestDebugContainer
{
    /**
     * Gets the private 'nelmio_alice.generator.object_generator.complete' shared service.
     *
     * @return \Nelmio\Alice\Generator\ObjectGenerator\CompleteObjectGenerator
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/nelmio/alice/src/Generator/ObjectGeneratorInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/nelmio/alice/src/IsAServiceTrait.php';
        include_once \dirname(__DIR__, 4).'/vendor/nelmio/alice/src/Generator/ObjectGenerator/CompleteObjectGenerator.php';

        return $container->privates['nelmio_alice.generator.object_generator.complete'] = new \Nelmio\Alice\Generator\ObjectGenerator\CompleteObjectGenerator(($container->privates['nelmio_alice.generator.object_generator.simple'] ?? $container->load('getNelmioAlice_Generator_ObjectGenerator_SimpleService')));
    }
}
