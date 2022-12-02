<?php

namespace ContainerWtIKcg3;
include_once \dirname(__DIR__, 4).'/vendor/theofidry/alice-data-fixtures/src/LoaderInterface.php';
include_once \dirname(__DIR__, 4).'/vendor/theofidry/alice-data-fixtures/src/Persistence/PersisterAwareInterface.php';
include_once \dirname(__DIR__, 4).'/vendor/nelmio/alice/src/IsAServiceTrait.php';
include_once \dirname(__DIR__, 4).'/vendor/theofidry/alice-data-fixtures/src/Loader/PersisterLoader.php';

class PersisterLoader_c8a8e24 extends \Fidry\AliceDataFixtures\Loader\PersisterLoader implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Fidry\AliceDataFixtures\Loader\PersisterLoader|null wrapped object, if the proxy is initialized
     */
    private $valueHolder46c0d = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializere3194 = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicProperties9460d = [
        
    ];

    public function withPersister(\Fidry\AliceDataFixtures\Persistence\PersisterInterface $persister) : \Fidry\AliceDataFixtures\Loader\PersisterLoader
    {
        $this->initializere3194 && ($this->initializere3194->__invoke($valueHolder46c0d, $this, 'withPersister', array('persister' => $persister), $this->initializere3194) || 1) && $this->valueHolder46c0d = $valueHolder46c0d;

        return $this->valueHolder46c0d->withPersister($persister);
    }

    public function load(array $fixturesFiles, array $parameters = [], array $objects = [], ?\Fidry\AliceDataFixtures\Persistence\PurgeMode $purgeMode = null) : array
    {
        $this->initializere3194 && ($this->initializere3194->__invoke($valueHolder46c0d, $this, 'load', array('fixturesFiles' => $fixturesFiles, 'parameters' => $parameters, 'objects' => $objects, 'purgeMode' => $purgeMode), $this->initializere3194) || 1) && $this->valueHolder46c0d = $valueHolder46c0d;

        return $this->valueHolder46c0d->load($fixturesFiles, $parameters, $objects, $purgeMode);
    }

    /**
     * Constructor for lazy initialization
     *
     * @param \Closure|null $initializer
     */
    public static function staticProxyConstructor($initializer)
    {
        static $reflection;

        $reflection = $reflection ?? new \ReflectionClass(__CLASS__);
        $instance   = $reflection->newInstanceWithoutConstructor();

        \Closure::bind(function (\Fidry\AliceDataFixtures\Loader\PersisterLoader $instance) {
            unset($instance->loader, $instance->persister, $instance->logger, $instance->processors);
        }, $instance, 'Fidry\\AliceDataFixtures\\Loader\\PersisterLoader')->__invoke($instance);

        $instance->initializere3194 = $initializer;

        return $instance;
    }

    public function __construct(\Fidry\AliceDataFixtures\LoaderInterface $decoratedLoader, \Fidry\AliceDataFixtures\Persistence\PersisterInterface $persister, ?\Psr\Log\LoggerInterface $logger = null, array $processors = [])
    {
        static $reflection;

        if (! $this->valueHolder46c0d) {
            $reflection = $reflection ?? new \ReflectionClass('Fidry\\AliceDataFixtures\\Loader\\PersisterLoader');
            $this->valueHolder46c0d = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Fidry\AliceDataFixtures\Loader\PersisterLoader $instance) {
            unset($instance->loader, $instance->persister, $instance->logger, $instance->processors);
        }, $this, 'Fidry\\AliceDataFixtures\\Loader\\PersisterLoader')->__invoke($this);

        }

        $this->valueHolder46c0d->__construct($decoratedLoader, $persister, $logger, $processors);
    }

    public function & __get($name)
    {
        $this->initializere3194 && ($this->initializere3194->__invoke($valueHolder46c0d, $this, '__get', ['name' => $name], $this->initializere3194) || 1) && $this->valueHolder46c0d = $valueHolder46c0d;

        if (isset(self::$publicProperties9460d[$name])) {
            return $this->valueHolder46c0d->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Fidry\\AliceDataFixtures\\Loader\\PersisterLoader');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder46c0d;

            $backtrace = debug_backtrace(false, 1);
            trigger_error(
                sprintf(
                    'Undefined property: %s::$%s in %s on line %s',
                    $realInstanceReflection->getName(),
                    $name,
                    $backtrace[0]['file'],
                    $backtrace[0]['line']
                ),
                \E_USER_NOTICE
            );
            return $targetObject->$name;
        }

        $targetObject = $this->valueHolder46c0d;
        $accessor = function & () use ($targetObject, $name) {
            return $targetObject->$name;
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = & $accessor();

        return $returnValue;
    }

    public function __set($name, $value)
    {
        $this->initializere3194 && ($this->initializere3194->__invoke($valueHolder46c0d, $this, '__set', array('name' => $name, 'value' => $value), $this->initializere3194) || 1) && $this->valueHolder46c0d = $valueHolder46c0d;

        $realInstanceReflection = new \ReflectionClass('Fidry\\AliceDataFixtures\\Loader\\PersisterLoader');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder46c0d;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolder46c0d;
        $accessor = function & () use ($targetObject, $name, $value) {
            $targetObject->$name = $value;

            return $targetObject->$name;
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = & $accessor();

        return $returnValue;
    }

    public function __isset($name)
    {
        $this->initializere3194 && ($this->initializere3194->__invoke($valueHolder46c0d, $this, '__isset', array('name' => $name), $this->initializere3194) || 1) && $this->valueHolder46c0d = $valueHolder46c0d;

        $realInstanceReflection = new \ReflectionClass('Fidry\\AliceDataFixtures\\Loader\\PersisterLoader');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder46c0d;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolder46c0d;
        $accessor = function () use ($targetObject, $name) {
            return isset($targetObject->$name);
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = $accessor();

        return $returnValue;
    }

    public function __unset($name)
    {
        $this->initializere3194 && ($this->initializere3194->__invoke($valueHolder46c0d, $this, '__unset', array('name' => $name), $this->initializere3194) || 1) && $this->valueHolder46c0d = $valueHolder46c0d;

        $realInstanceReflection = new \ReflectionClass('Fidry\\AliceDataFixtures\\Loader\\PersisterLoader');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder46c0d;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolder46c0d;
        $accessor = function () use ($targetObject, $name) {
            unset($targetObject->$name);

            return;
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $accessor();
    }

    public function __clone()
    {
        $this->initializere3194 && ($this->initializere3194->__invoke($valueHolder46c0d, $this, '__clone', array(), $this->initializere3194) || 1) && $this->valueHolder46c0d = $valueHolder46c0d;

        $this->valueHolder46c0d = clone $this->valueHolder46c0d;
    }

    public function __sleep()
    {
        $this->initializere3194 && ($this->initializere3194->__invoke($valueHolder46c0d, $this, '__sleep', array(), $this->initializere3194) || 1) && $this->valueHolder46c0d = $valueHolder46c0d;

        return array('valueHolder46c0d');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Fidry\AliceDataFixtures\Loader\PersisterLoader $instance) {
            unset($instance->loader, $instance->persister, $instance->logger, $instance->processors);
        }, $this, 'Fidry\\AliceDataFixtures\\Loader\\PersisterLoader')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializere3194 = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializere3194;
    }

    public function initializeProxy() : bool
    {
        return $this->initializere3194 && ($this->initializere3194->__invoke($valueHolder46c0d, $this, 'initializeProxy', array(), $this->initializere3194) || 1) && $this->valueHolder46c0d = $valueHolder46c0d;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolder46c0d;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder46c0d;
    }
}

if (!\class_exists('PersisterLoader_c8a8e24', false)) {
    \class_alias(__NAMESPACE__.'\\PersisterLoader_c8a8e24', 'PersisterLoader_c8a8e24', false);
}
