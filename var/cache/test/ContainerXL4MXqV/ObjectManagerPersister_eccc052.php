<?php

namespace ContainerXL4MXqV;
include_once \dirname(__DIR__, 4).'/vendor/theofidry/alice-data-fixtures/src/Persistence/PersisterInterface.php';
include_once \dirname(__DIR__, 4).'/vendor/nelmio/alice/src/IsAServiceTrait.php';
include_once \dirname(__DIR__, 4).'/vendor/theofidry/alice-data-fixtures/src/Bridge/Doctrine/Persister/ObjectManagerPersister.php';

class ObjectManagerPersister_eccc052 extends \Fidry\AliceDataFixtures\Bridge\Doctrine\Persister\ObjectManagerPersister implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Fidry\AliceDataFixtures\Bridge\Doctrine\Persister\ObjectManagerPersister|null wrapped object, if the proxy is initialized
     */
    private $valueHolderffe66 = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializere924e = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicProperties7b032 = [
        
    ];

    public function persist(object $object) : void
    {
        $this->initializere924e && ($this->initializere924e->__invoke($valueHolderffe66, $this, 'persist', array('object' => $object), $this->initializere924e) || 1) && $this->valueHolderffe66 = $valueHolderffe66;

        $this->valueHolderffe66->persist($object);
return;
    }

    public function flush() : void
    {
        $this->initializere924e && ($this->initializere924e->__invoke($valueHolderffe66, $this, 'flush', array(), $this->initializere924e) || 1) && $this->valueHolderffe66 = $valueHolderffe66;

        $this->valueHolderffe66->flush();
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

        $instance->initializere924e = $initializer;

        return $instance;
    }

    public function __construct(\Doctrine\Persistence\ObjectManager $manager)
    {
        static $reflection;

        if (! $this->valueHolderffe66) {
            $reflection = $reflection ?? new \ReflectionClass('Fidry\\AliceDataFixtures\\Bridge\\Doctrine\\Persister\\ObjectManagerPersister');
            $this->valueHolderffe66 = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Fidry\AliceDataFixtures\Bridge\Doctrine\Persister\ObjectManagerPersister $instance) {
            unset($instance->objectManager, $instance->persistableClasses, $instance->metadataToRestore, $instance->objectChecked, $instance->unitOfWorkPersistersReflection);
        }, $this, 'Fidry\\AliceDataFixtures\\Bridge\\Doctrine\\Persister\\ObjectManagerPersister')->__invoke($this);

        }

        $this->valueHolderffe66->__construct($manager);
    }

    public function & __get($name)
    {
        $this->initializere924e && ($this->initializere924e->__invoke($valueHolderffe66, $this, '__get', ['name' => $name], $this->initializere924e) || 1) && $this->valueHolderffe66 = $valueHolderffe66;

        if (isset(self::$publicProperties7b032[$name])) {
            return $this->valueHolderffe66->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Fidry\\AliceDataFixtures\\Bridge\\Doctrine\\Persister\\ObjectManagerPersister');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderffe66;

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

        $targetObject = $this->valueHolderffe66;
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
        $this->initializere924e && ($this->initializere924e->__invoke($valueHolderffe66, $this, '__set', array('name' => $name, 'value' => $value), $this->initializere924e) || 1) && $this->valueHolderffe66 = $valueHolderffe66;

        $realInstanceReflection = new \ReflectionClass('Fidry\\AliceDataFixtures\\Bridge\\Doctrine\\Persister\\ObjectManagerPersister');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderffe66;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolderffe66;
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
        $this->initializere924e && ($this->initializere924e->__invoke($valueHolderffe66, $this, '__isset', array('name' => $name), $this->initializere924e) || 1) && $this->valueHolderffe66 = $valueHolderffe66;

        $realInstanceReflection = new \ReflectionClass('Fidry\\AliceDataFixtures\\Bridge\\Doctrine\\Persister\\ObjectManagerPersister');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderffe66;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolderffe66;
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
        $this->initializere924e && ($this->initializere924e->__invoke($valueHolderffe66, $this, '__unset', array('name' => $name), $this->initializere924e) || 1) && $this->valueHolderffe66 = $valueHolderffe66;

        $realInstanceReflection = new \ReflectionClass('Fidry\\AliceDataFixtures\\Bridge\\Doctrine\\Persister\\ObjectManagerPersister');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderffe66;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolderffe66;
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
        $this->initializere924e && ($this->initializere924e->__invoke($valueHolderffe66, $this, '__clone', array(), $this->initializere924e) || 1) && $this->valueHolderffe66 = $valueHolderffe66;

        $this->valueHolderffe66 = clone $this->valueHolderffe66;
    }

    public function __sleep()
    {
        $this->initializere924e && ($this->initializere924e->__invoke($valueHolderffe66, $this, '__sleep', array(), $this->initializere924e) || 1) && $this->valueHolderffe66 = $valueHolderffe66;

        return array('valueHolderffe66');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Fidry\AliceDataFixtures\Bridge\Doctrine\Persister\ObjectManagerPersister $instance) {
            unset($instance->objectManager, $instance->persistableClasses, $instance->metadataToRestore, $instance->objectChecked, $instance->unitOfWorkPersistersReflection);
        }, $this, 'Fidry\\AliceDataFixtures\\Bridge\\Doctrine\\Persister\\ObjectManagerPersister')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializere924e = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializere924e;
    }

    public function initializeProxy() : bool
    {
        return $this->initializere924e && ($this->initializere924e->__invoke($valueHolderffe66, $this, 'initializeProxy', array(), $this->initializere924e) || 1) && $this->valueHolderffe66 = $valueHolderffe66;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolderffe66;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolderffe66;
    }
}

if (!\class_exists('ObjectManagerPersister_eccc052', false)) {
    \class_alias(__NAMESPACE__.'\\ObjectManagerPersister_eccc052', 'ObjectManagerPersister_eccc052', false);
}
