<?php

namespace ContainerDmpXvzB;
include_once \dirname(__DIR__, 4).'/vendor/theofidry/alice-data-fixtures/src/Persistence/PersisterInterface.php';
include_once \dirname(__DIR__, 4).'/vendor/nelmio/alice/src/IsAServiceTrait.php';
include_once \dirname(__DIR__, 4).'/vendor/theofidry/alice-data-fixtures/src/Bridge/Doctrine/Persister/ObjectManagerPersister.php';

class ObjectManagerPersister_eccc052 extends \Fidry\AliceDataFixtures\Bridge\Doctrine\Persister\ObjectManagerPersister implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Fidry\AliceDataFixtures\Bridge\Doctrine\Persister\ObjectManagerPersister|null wrapped object, if the proxy is initialized
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

    public function persist(object $object) : void
    {
        $this->initializere3194 && ($this->initializere3194->__invoke($valueHolder46c0d, $this, 'persist', array('object' => $object), $this->initializere3194) || 1) && $this->valueHolder46c0d = $valueHolder46c0d;

        $this->valueHolder46c0d->persist($object);
return;
    }

    public function flush() : void
    {
        $this->initializere3194 && ($this->initializere3194->__invoke($valueHolder46c0d, $this, 'flush', array(), $this->initializere3194) || 1) && $this->valueHolder46c0d = $valueHolder46c0d;

        $this->valueHolder46c0d->flush();
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

        \Closure::bind(function (\Fidry\AliceDataFixtures\Bridge\Doctrine\Persister\ObjectManagerPersister $instance) {
            unset($instance->objectManager, $instance->persistableClasses, $instance->metadataToRestore, $instance->objectChecked, $instance->unitOfWorkPersistersReflection);
        }, $instance, 'Fidry\\AliceDataFixtures\\Bridge\\Doctrine\\Persister\\ObjectManagerPersister')->__invoke($instance);

        $instance->initializere3194 = $initializer;

        return $instance;
    }

    public function __construct(\Doctrine\Persistence\ObjectManager $manager)
    {
        static $reflection;

        if (! $this->valueHolder46c0d) {
            $reflection = $reflection ?? new \ReflectionClass('Fidry\\AliceDataFixtures\\Bridge\\Doctrine\\Persister\\ObjectManagerPersister');
            $this->valueHolder46c0d = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Fidry\AliceDataFixtures\Bridge\Doctrine\Persister\ObjectManagerPersister $instance) {
            unset($instance->objectManager, $instance->persistableClasses, $instance->metadataToRestore, $instance->objectChecked, $instance->unitOfWorkPersistersReflection);
        }, $this, 'Fidry\\AliceDataFixtures\\Bridge\\Doctrine\\Persister\\ObjectManagerPersister')->__invoke($this);

        }

        $this->valueHolder46c0d->__construct($manager);
    }

    public function & __get($name)
    {
        $this->initializere3194 && ($this->initializere3194->__invoke($valueHolder46c0d, $this, '__get', ['name' => $name], $this->initializere3194) || 1) && $this->valueHolder46c0d = $valueHolder46c0d;

        if (isset(self::$publicProperties9460d[$name])) {
            return $this->valueHolder46c0d->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Fidry\\AliceDataFixtures\\Bridge\\Doctrine\\Persister\\ObjectManagerPersister');

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

        $realInstanceReflection = new \ReflectionClass('Fidry\\AliceDataFixtures\\Bridge\\Doctrine\\Persister\\ObjectManagerPersister');

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

        $realInstanceReflection = new \ReflectionClass('Fidry\\AliceDataFixtures\\Bridge\\Doctrine\\Persister\\ObjectManagerPersister');

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

        $realInstanceReflection = new \ReflectionClass('Fidry\\AliceDataFixtures\\Bridge\\Doctrine\\Persister\\ObjectManagerPersister');

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
        \Closure::bind(function (\Fidry\AliceDataFixtures\Bridge\Doctrine\Persister\ObjectManagerPersister $instance) {
            unset($instance->objectManager, $instance->persistableClasses, $instance->metadataToRestore, $instance->objectChecked, $instance->unitOfWorkPersistersReflection);
        }, $this, 'Fidry\\AliceDataFixtures\\Bridge\\Doctrine\\Persister\\ObjectManagerPersister')->__invoke($this);
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

if (!\class_exists('ObjectManagerPersister_eccc052', false)) {
    \class_alias(__NAMESPACE__.'\\ObjectManagerPersister_eccc052', 'ObjectManagerPersister_eccc052', false);
}
