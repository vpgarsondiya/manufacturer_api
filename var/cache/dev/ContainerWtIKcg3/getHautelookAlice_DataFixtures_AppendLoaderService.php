<?php

namespace ContainerWtIKcg3;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getHautelookAlice_DataFixtures_AppendLoaderService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'hautelook_alice.data_fixtures.append_loader' shared service.
     *
     * @return \Fidry\AliceDataFixtures\Loader\FileResolverLoader
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/theofidry/alice-data-fixtures/src/LoaderInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/theofidry/alice-data-fixtures/src/Persistence/PersisterAwareInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/nelmio/alice/src/IsAServiceTrait.php';
        include_once \dirname(__DIR__, 4).'/vendor/theofidry/alice-data-fixtures/src/Loader/FileResolverLoader.php';
        include_once \dirname(__DIR__, 4).'/vendor/theofidry/alice-data-fixtures/src/FileResolverInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/hautelook/alice-bundle/src/Resolver/File/KernelFileResolver.php';

        return $container->services['hautelook_alice.data_fixtures.append_loader'] = new \Fidry\AliceDataFixtures\Loader\FileResolverLoader(($container->privates['fidry_alice_data_fixtures.doctrine.persister_loader'] ?? $container->load('getFidryAliceDataFixtures_Doctrine_PersisterLoaderService')), ($container->services['hautelook_alice.resolver.file'] ?? ($container->services['hautelook_alice.resolver.file'] = new \Hautelook\AliceBundle\Resolver\File\KernelFileResolver(($container->services['kernel'] ?? $container->get('kernel', 1))))));
    }
}
