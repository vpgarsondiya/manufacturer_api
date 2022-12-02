<?php

namespace ContainerXL4MXqV;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getNelmioAlice_FileParser_SymfonyYamlService extends App_KernelTestDebugContainer
{
    /**
     * Gets the private 'nelmio_alice.file_parser.symfony_yaml' shared service.
     *
     * @return \Symfony\Component\Yaml\Parser
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/yaml/Parser.php';

        return $container->privates['nelmio_alice.file_parser.symfony_yaml'] = new \Symfony\Component\Yaml\Parser();
    }
}
