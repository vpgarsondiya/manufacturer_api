<?php

namespace ContainerXL4MXqV;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getNelmioAlice_Generator_Instantiator_Chainable_NullConstructorInstantiatorService extends App_KernelTestDebugContainer
{
    /**
     * Gets the private 'nelmio_alice.generator.instantiator.chainable.null_constructor_instantiator' shared service.
     *
     * @return \Nelmio\Alice\Generator\Instantiator\Chainable\NullConstructorInstantiator
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/nelmio/alice/src/Generator/InstantiatorInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/nelmio/alice/src/Generator/Instantiator/ChainableInstantiatorInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/nelmio/alice/src/IsAServiceTrait.php';
        include_once \dirname(__DIR__, 4).'/vendor/nelmio/alice/src/Generator/Instantiator/Chainable/AbstractChainableInstantiator.php';
        include_once \dirname(__DIR__, 4).'/vendor/nelmio/alice/src/Generator/Instantiator/Chainable/NullConstructorInstantiator.php';

        return $container->privates['nelmio_alice.generator.instantiator.chainable.null_constructor_instantiator'] = new \Nelmio\Alice\Generator\Instantiator\Chainable\NullConstructorInstantiator();
    }
}
