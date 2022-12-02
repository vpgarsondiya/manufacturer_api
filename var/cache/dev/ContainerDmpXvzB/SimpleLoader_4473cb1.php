<?php

namespace ContainerDmpXvzB;
include_once \dirname(__DIR__, 4).'/vendor/theofidry/alice-data-fixtures/src/LoaderInterface.php';
include_once \dirname(__DIR__, 4).'/vendor/nelmio/alice/src/IsAServiceTrait.php';
include_once \dirname(__DIR__, 4).'/vendor/theofidry/alice-data-fixtures/src/Loader/SimpleLoader.php';

class SimpleLoader_4473cb1 extends \Fidry\AliceDataFixtures\Loader\SimpleLoader implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Fidry\AliceDataFixtures\Loader\SimpleLoader|null wrapped object, if the proxy is initialized
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

        \Closure::bind(function (\Fidry\AliceDataFixtures\Loader\SimpleLoader $instance) {
            unset($instance->filesLoader, $instance->logger);
        }, $instance, 'Fidry\\AliceDataFixtures\\Loader\\SimpleLoader')->__invoke($instance);

        $instance->initializere3194 = $initializer;

        return $instance;
    }

    public function __construct(\Nelmio\Alice\FilesLoaderInterface $fileLoader, ?\Psr\Log\LoggerInterface $logger = null)
    {
        static $reflection;

        if (! $this->valueHolder46c0d) {
            $reflection = $reflection ?? new \ReflectionClass('Fidry\\AliceDataFixtures\\Loader\\SimpleLoader');
            $this->valueHolder46c0d = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Fidry\AliceDataFixtures\Loader\SimpleLoader $instance) {
            unset($instance->filesLoader, $instance->logger);
        }, $this, 'Fidry\\AliceDataFixtures\\Loader\\SimpleLoader')->__invoke($this);

        }

        $this->valueHolder46c0d->__construct($fileLoader, $logger);
    }

    public function & __get($name)
    {
        $this->initializere3194 && ($this->initializere3194->__invoke($valueHolder46c0d, $this, '__get', ['name' => $name], $this->initializere3194) || 1) && $this->valueHolder46c0d = $valueHolder46c0d;

        if (isset(self::$publicProperties9460d[$name])) {
            return $this->valueHolder46c0d->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Fidry\\AliceDataFixtures\\Loader\\SimpleLoader');

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

        $realInstanceReflection = new \ReflectionClass('Fidry\\AliceDataFixtures\\Loader\\SimpleLoader');

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

        $realInstanceReflection = new \ReflectionClass('Fidry\\AliceDataFixtures\\Loader\\SimpleLoader');

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

        $realInstanceReflection = new \ReflectionClass('Fidry\\AliceDataFixtures\\Loader\\SimpleLoader');

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
        \Closure::bind(function (\Fidry\AliceDataFixtures\Loader\SimpleLoader $instance) {
            unset($instance->filesLoader, $instance->logger);
        }, $this, 'Fidry\\AliceDataFixtures\\Loader\\SimpleLoader')->__invoke($this);
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

if (!\class_exists('SimpleLoader_4473cb1', false)) {
    \class_alias(__NAMESPACE__.'\\SimpleLoader_4473cb1', 'SimpleLoader_4473cb1', false);
}
