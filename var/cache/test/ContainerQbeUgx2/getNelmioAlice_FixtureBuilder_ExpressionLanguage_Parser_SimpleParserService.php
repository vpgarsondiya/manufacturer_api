<?php

namespace ContainerQbeUgx2;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getNelmioAlice_FixtureBuilder_ExpressionLanguage_Parser_SimpleParserService extends App_KernelTestDebugContainer
{
    /**
     * Gets the private 'nelmio_alice.fixture_builder.expression_language.parser.simple_parser' shared service.
     *
     * @return \Nelmio\Alice\FixtureBuilder\ExpressionLanguage\Parser\SimpleParser
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/nelmio/alice/src/FixtureBuilder/ExpressionLanguage/ParserInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/nelmio/alice/src/IsAServiceTrait.php';
        include_once \dirname(__DIR__, 4).'/vendor/nelmio/alice/src/FixtureBuilder/ExpressionLanguage/Parser/SimpleParser.php';

        return $container->privates['nelmio_alice.fixture_builder.expression_language.parser.simple_parser'] = new \Nelmio\Alice\FixtureBuilder\ExpressionLanguage\Parser\SimpleParser(($container->privates['nelmio_alice.fixture_builder.expression_language.lexer.empty_value_lexer'] ?? $container->load('getNelmioAlice_FixtureBuilder_ExpressionLanguage_Lexer_EmptyValueLexerService')), ($container->privates['nelmio_alice.fixture_builder.expression_language.parser.token_parser.registry'] ?? $container->load('getNelmioAlice_FixtureBuilder_ExpressionLanguage_Parser_TokenParser_RegistryService')));
    }
}
