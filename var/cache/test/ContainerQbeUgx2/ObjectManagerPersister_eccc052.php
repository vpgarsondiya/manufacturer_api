<?php

namespace ContainerQbeUgx2;
include_once \dirname(__DIR__, 4).'/vendor/theofidry/alice-data-fixtures/src/Persistence/PersisterInterface.php';
include_once \dirname(__DIR__, 4).'/vendor/nelmio/alice/src/IsAServiceTrait.php';
include_once \dirname(__DIR__, 4).'/vendor/theofidry/alice-data-fixtures/src/Bridge/Doctrine/Persister/ObjectManagerPersister.php';

class ObjectManagerPersister_eccc052 extends \Fidry\AliceDataFixtures\Bridge\Doctrine\Persister\ObjectManagerPersister implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Fidry\AliceDataFixtures\Bridge\Doctrine\Persister\ObjectManagerPersister|null wrapped object, if the proxy is initialized
     */
    private $valueHolderb76bb = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializer4f75d = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicPropertiesedba1 = [
        
    ];

    public function persist(object $object) : void
    {
        $this->initializer4f75d && ($this->initializer4f75d->__invoke($valueHolderb76bb, $this, 'persist', array('object' => $object), $this->initializer4f75d) || 1) && $this->valueHolderb76bb = $valueHolderb76bb;

        $this->valueHolderb76bb->persist($object);
return;
    }

    public function flush() : void
    {
        $this->initializer4f75d && ($this->initializer4f75d->__invoke($valueHolderb76bb, $this, 'flush', array(), $this->initializer4f75d) || 1) && $this->valueHolderb76bb = $valueHolderb76bb;

        $this->valueHolderb76bb->flush();
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

        $instance->initializer4f75d = $initializer;

        return $instance;
    }

    public function __construct(\Doctrine\Persistence\ObjectManager $manager)
    {
        static $reflection;

        if (! $this->valueHolderb76bb) {
            $reflection = $reflection ?? new \ReflectionClass('Fidry\\AliceDataFixtures\\Bridge\\Doctrine\\Persister\\ObjectManagerPersister');
            $this->valueHolderb76bb = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Fidry\AliceDataFixtures\Bridge\Doctrine\Persister\ObjectManagerPersister $instance) {
            unset($instance->objectManager, $instance->persistableClasses, $instance->metadataToRestore, $instance->objectChecked, $instance->unitOfWorkPersistersReflection);
        }, $this, 'Fidry\\AliceDataFixtures\\Bridge\\Doctrine\\Persister\\ObjectManagerPersister')->__invoke($this);

        }

        $this->valueHolderb76bb->__construct($manager);
    }

    public function & __get($name)
    {
        $this->initializer4f75d && ($this->initializer4f75d->__invoke($valueHolderb76bb, $this, '__get', ['name' => $name], $this->initializer4f75d) || 1) && $this->valueHolderb76bb = $valueHolderb76bb;

        if (isset(self::$publicPropertiesedba1[$name])) {
            return $this->valueHolderb76bb->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Fidry\\AliceDataFixtures\\Bridge\\Doctrine\\Persister\\ObjectManagerPersister');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderb76bb;

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

        $targetObject = $this->valueHolderb76bb;
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
        $this->initializer4f75d && ($this->initializer4f75d->__invoke($valueHolderb76bb, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer4f75d) || 1) && $this->valueHolderb76bb = $valueHolderb76bb;

        $realInstanceReflection = new \ReflectionClass('Fidry\\AliceDataFixtures\\Bridge\\Doctrine\\Persister\\ObjectManagerPersister');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderb76bb;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolderb76bb;
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
        $this->initializer4f75d && ($this->initializer4f75d->__invoke($valueHolderb76bb, $this, '__isset', array('name' => $name), $this->initializer4f75d) || 1) && $this->valueHolderb76bb = $valueHolderb76bb;

        $realInstanceReflection = new \ReflectionClass('Fidry\\AliceDataFixtures\\Bridge\\Doctrine\\Persister\\ObjectManagerPersister');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderb76bb;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolderb76bb;
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
        $this->initializer4f75d && ($this->initializer4f75d->__invoke($valueHolderb76bb, $this, '__unset', array('name' => $name), $this->initializer4f75d) || 1) && $this->valueHolderb76bb = $valueHolderb76bb;

        $realInstanceReflection = new \ReflectionClass('Fidry\\AliceDataFixtures\\Bridge\\Doctrine\\Persister\\ObjectManagerPersister');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderb76bb;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolderb76bb;
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
        $this->initializer4f75d && ($this->initializer4f75d->__invoke($valueHolderb76bb, $this, '__clone', array(), $this->initializer4f75d) || 1) && $this->valueHolderb76bb = $valueHolderb76bb;

        $this->valueHolderb76bb = clone $this->valueHolderb76bb;
    }

    public function __sleep()
    {
        $this->initializer4f75d && ($this->initializer4f75d->__invoke($valueHolderb76bb, $this, '__sleep', array(), $this->initializer4f75d) || 1) && $this->valueHolderb76bb = $valueHolderb76bb;

        return array('valueHolderb76bb');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Fidry\AliceDataFixtures\Bridge\Doctrine\Persister\ObjectManagerPersister $instance) {
            unset($instance->objectManager, $instance->persistableClasses, $instance->metadataToRestore, $instance->objectChecked, $instance->unitOfWorkPersistersReflection);
        }, $this, 'Fidry\\AliceDataFixtures\\Bridge\\Doctrine\\Persister\\ObjectManagerPersister')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializer4f75d = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializer4f75d;
    }

    public function initializeProxy() : bool
    {
        return $this->initializer4f75d && ($this->initializer4f75d->__invoke($valueHolderb76bb, $this, 'initializeProxy', array(), $this->initializer4f75d) || 1) && $this->valueHolderb76bb = $valueHolderb76bb;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolderb76bb;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolderb76bb;
    }
}

if (!\class_exists('ObjectManagerPersister_eccc052', false)) {
    \class_alias(__NAMESPACE__.'\\ObjectManagerPersister_eccc052', 'ObjectManagerPersister_eccc052', false);
}
