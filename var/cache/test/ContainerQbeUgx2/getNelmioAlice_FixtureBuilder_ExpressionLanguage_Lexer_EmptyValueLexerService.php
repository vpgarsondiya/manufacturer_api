<?php

namespace ContainerQbeUgx2;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getNelmioAlice_FixtureBuilder_ExpressionLanguage_Lexer_EmptyValueLexerService extends App_KernelTestDebugContainer
{
    /**
     * Gets the private 'nelmio_alice.fixture_builder.expression_language.lexer.empty_value_lexer' shared service.
     *
     * @return \Nelmio\Alice\FixtureBuilder\ExpressionLanguage\Lexer\EmptyValueLexer
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/nelmio/alice/src/FixtureBuilder/ExpressionLanguage/LexerInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/nelmio/alice/src/IsAServiceTrait.php';
        include_once \dirname(__DIR__, 4).'/vendor/nelmio/alice/src/FixtureBuilder/ExpressionLanguage/Lexer/EmptyValueLexer.php';

        return $container->privates['nelmio_alice.fixture_builder.expression_language.lexer.empty_value_lexer'] = new \Nelmio\Alice\FixtureBuilder\ExpressionLanguage\Lexer\EmptyValueLexer(($container->privates['nelmio_alice.fixture_builder.expression_language.lexer.reference_escaper_lexer'] ?? $container->load('getNelmioAlice_FixtureBuilder_ExpressionLanguage_Lexer_ReferenceEscaperLexerService')));
    }
}
