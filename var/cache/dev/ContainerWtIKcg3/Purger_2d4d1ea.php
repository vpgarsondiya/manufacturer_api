<?php

namespace ContainerWtIKcg3;
include_once \dirname(__DIR__, 4).'/vendor/theofidry/alice-data-fixtures/src/Persistence/PurgerInterface.php';
include_once \dirname(__DIR__, 4).'/vendor/theofidry/alice-data-fixtures/src/Persistence/PurgerFactoryInterface.php';
include_once \dirname(__DIR__, 4).'/vendor/nelmio/alice/src/IsAServiceTrait.php';
include_once \dirname(__DIR__, 4).'/vendor/theofidry/alice-data-fixtures/src/Bridge/Doctrine/Purger/Purger.php';

class Purger_2d4d1ea extends \Fidry\AliceDataFixtures\Bridge\Doctrine\Purger\Purger implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Fidry\AliceDataFixtures\Bridge\Doctrine\Purger\Purger|null wrapped object, if the proxy is initialized
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

    public function create(\Fidry\AliceDataFixtures\Persistence\PurgeMode $mode, ?\Fidry\AliceDataFixtures\Persistence\PurgerInterface $purger = null) : \Fidry\AliceDataFixtures\Persistence\PurgerInterface
    {
        $this->initializere3194 && ($this->initializere3194->__invoke($valueHolder46c0d, $this, 'create', array('mode' => $mode, 'purger' => $purger), $this->initializere3194) || 1) && $this->valueHolder46c0d = $valueHolder46c0d;

        return $this->valueHolder46c0d->create($mode, $purger);
    }

    public function purge() : void
    {
        $this->initializere3194 && ($this->initializere3194->__invoke($valueHolder46c0d, $this, 'purge', array(), $this->initializere3194) || 1) && $this->valueHolder46c0d = $valueHolder46c0d;

        $this->valueHolder46c0d->purge();
return;
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

        \Closure::bind(function (\Fidry\AliceDataFixtures\Bridge\Doctrine\Purger\Purger $instance) {
            unset($instance->manager, $instance->purgeMode, $instance->purger);
        }, $instance, 'Fidry\\AliceDataFixtures\\Bridge\\Doctrine\\Purger\\Purger')->__invoke($instance);

        $instance->initializere3194 = $initializer;

        return $instance;
    }

    public function __construct(\Doctrine\Persistence\ObjectManager $manager, ?\Fidry\AliceDataFixtures\Persistence\PurgeMode $purgeMode = null)
    {
        static $reflection;

        if (! $this->valueHolder46c0d) {
            $reflection = $reflection ?? new \ReflectionClass('Fidry\\AliceDataFixtures\\Bridge\\Doctrine\\Purger\\Purger');
            $this->valueHolder46c0d = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Fidry\AliceDataFixtures\Bridge\Doctrine\Purger\Purger $instance) {
            unset($instance->manager, $instance->purgeMode, $instance->purger);
        }, $this, 'Fidry\\AliceDataFixtures\\Bridge\\Doctrine\\Purger\\Purger')->__invoke($this);

        }

        $this->valueHolder46c0d->__construct($manager, $purgeMode);
    }

    public function & __get($name)
    {
        $this->initializere3194 && ($this->initializere3194->__invoke($valueHolder46c0d, $this, '__get', ['name' => $name], $this->initializere3194) || 1) && $this->valueHolder46c0d = $valueHolder46c0d;

        if (isset(self::$publicProperties9460d[$name])) {
            return $this->valueHolder46c0d->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Fidry\\AliceDataFixtures\\Bridge\\Doctrine\\Purger\\Purger');

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

        $realInstanceReflection = new \ReflectionClass('Fidry\\AliceDataFixtures\\Bridge\\Doctrine\\Purger\\Purger');

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

        $realInstanceReflection = new \ReflectionClass('Fidry\\AliceDataFixtures\\Bridge\\Doctrine\\Purger\\Purger');

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

        $realInstanceReflection = new \ReflectionClass('Fidry\\AliceDataFixtures\\Bridge\\Doctrine\\Purger\\Purger');

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
        \Closure::bind(function (\Fidry\AliceDataFixtures\Bridge\Doctrine\Purger\Purger $instance) {
            unset($instance->manager, $instance->purgeMode, $instance->purger);
        }, $this, 'Fidry\\AliceDataFixtures\\Bridge\\Doctrine\\Purger\\Purger')->__invoke($this);
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

if (!\class_exists('Purger_2d4d1ea', false)) {
    \class_alias(__NAMESPACE__.'\\Purger_2d4d1ea', 'Purger_2d4d1ea', false);
}
