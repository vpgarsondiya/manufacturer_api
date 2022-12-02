<?php

namespace ContainerQbeUgx2;
include_once \dirname(__DIR__, 4).'/vendor/doctrine/persistence/src/Persistence/ObjectManager.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
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

    public function getConnection()
    {
        $this->initializer4f75d && ($this->initializer4f75d->__invoke($valueHolderb76bb, $this, 'getConnection', array(), $this->initializer4f75d) || 1) && $this->valueHolderb76bb = $valueHolderb76bb;

        return $this->valueHolderb76bb->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializer4f75d && ($this->initializer4f75d->__invoke($valueHolderb76bb, $this, 'getMetadataFactory', array(), $this->initializer4f75d) || 1) && $this->valueHolderb76bb = $valueHolderb76bb;

        return $this->valueHolderb76bb->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializer4f75d && ($this->initializer4f75d->__invoke($valueHolderb76bb, $this, 'getExpressionBuilder', array(), $this->initializer4f75d) || 1) && $this->valueHolderb76bb = $valueHolderb76bb;

        return $this->valueHolderb76bb->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializer4f75d && ($this->initializer4f75d->__invoke($valueHolderb76bb, $this, 'beginTransaction', array(), $this->initializer4f75d) || 1) && $this->valueHolderb76bb = $valueHolderb76bb;

        return $this->valueHolderb76bb->beginTransaction();
    }

    public function getCache()
    {
        $this->initializer4f75d && ($this->initializer4f75d->__invoke($valueHolderb76bb, $this, 'getCache', array(), $this->initializer4f75d) || 1) && $this->valueHolderb76bb = $valueHolderb76bb;

        return $this->valueHolderb76bb->getCache();
    }

    public function transactional($func)
    {
        $this->initializer4f75d && ($this->initializer4f75d->__invoke($valueHolderb76bb, $this, 'transactional', array('func' => $func), $this->initializer4f75d) || 1) && $this->valueHolderb76bb = $valueHolderb76bb;

        return $this->valueHolderb76bb->transactional($func);
    }

    public function wrapInTransaction(callable $func)
    {
        $this->initializer4f75d && ($this->initializer4f75d->__invoke($valueHolderb76bb, $this, 'wrapInTransaction', array('func' => $func), $this->initializer4f75d) || 1) && $this->valueHolderb76bb = $valueHolderb76bb;

        return $this->valueHolderb76bb->wrapInTransaction($func);
    }

    public function commit()
    {
        $this->initializer4f75d && ($this->initializer4f75d->__invoke($valueHolderb76bb, $this, 'commit', array(), $this->initializer4f75d) || 1) && $this->valueHolderb76bb = $valueHolderb76bb;

        return $this->valueHolderb76bb->commit();
    }

    public function rollback()
    {
        $this->initializer4f75d && ($this->initializer4f75d->__invoke($valueHolderb76bb, $this, 'rollback', array(), $this->initializer4f75d) || 1) && $this->valueHolderb76bb = $valueHolderb76bb;

        return $this->valueHolderb76bb->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializer4f75d && ($this->initializer4f75d->__invoke($valueHolderb76bb, $this, 'getClassMetadata', array('className' => $className), $this->initializer4f75d) || 1) && $this->valueHolderb76bb = $valueHolderb76bb;

        return $this->valueHolderb76bb->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializer4f75d && ($this->initializer4f75d->__invoke($valueHolderb76bb, $this, 'createQuery', array('dql' => $dql), $this->initializer4f75d) || 1) && $this->valueHolderb76bb = $valueHolderb76bb;

        return $this->valueHolderb76bb->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializer4f75d && ($this->initializer4f75d->__invoke($valueHolderb76bb, $this, 'createNamedQuery', array('name' => $name), $this->initializer4f75d) || 1) && $this->valueHolderb76bb = $valueHolderb76bb;

        return $this->valueHolderb76bb->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializer4f75d && ($this->initializer4f75d->__invoke($valueHolderb76bb, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializer4f75d) || 1) && $this->valueHolderb76bb = $valueHolderb76bb;

        return $this->valueHolderb76bb->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializer4f75d && ($this->initializer4f75d->__invoke($valueHolderb76bb, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializer4f75d) || 1) && $this->valueHolderb76bb = $valueHolderb76bb;

        return $this->valueHolderb76bb->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializer4f75d && ($this->initializer4f75d->__invoke($valueHolderb76bb, $this, 'createQueryBuilder', array(), $this->initializer4f75d) || 1) && $this->valueHolderb76bb = $valueHolderb76bb;

        return $this->valueHolderb76bb->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializer4f75d && ($this->initializer4f75d->__invoke($valueHolderb76bb, $this, 'flush', array('entity' => $entity), $this->initializer4f75d) || 1) && $this->valueHolderb76bb = $valueHolderb76bb;

        return $this->valueHolderb76bb->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializer4f75d && ($this->initializer4f75d->__invoke($valueHolderb76bb, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer4f75d) || 1) && $this->valueHolderb76bb = $valueHolderb76bb;

        return $this->valueHolderb76bb->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializer4f75d && ($this->initializer4f75d->__invoke($valueHolderb76bb, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializer4f75d) || 1) && $this->valueHolderb76bb = $valueHolderb76bb;

        return $this->valueHolderb76bb->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializer4f75d && ($this->initializer4f75d->__invoke($valueHolderb76bb, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializer4f75d) || 1) && $this->valueHolderb76bb = $valueHolderb76bb;

        return $this->valueHolderb76bb->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializer4f75d && ($this->initializer4f75d->__invoke($valueHolderb76bb, $this, 'clear', array('entityName' => $entityName), $this->initializer4f75d) || 1) && $this->valueHolderb76bb = $valueHolderb76bb;

        return $this->valueHolderb76bb->clear($entityName);
    }

    public function close()
    {
        $this->initializer4f75d && ($this->initializer4f75d->__invoke($valueHolderb76bb, $this, 'close', array(), $this->initializer4f75d) || 1) && $this->valueHolderb76bb = $valueHolderb76bb;

        return $this->valueHolderb76bb->close();
    }

    public function persist($entity)
    {
        $this->initializer4f75d && ($this->initializer4f75d->__invoke($valueHolderb76bb, $this, 'persist', array('entity' => $entity), $this->initializer4f75d) || 1) && $this->valueHolderb76bb = $valueHolderb76bb;

        return $this->valueHolderb76bb->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializer4f75d && ($this->initializer4f75d->__invoke($valueHolderb76bb, $this, 'remove', array('entity' => $entity), $this->initializer4f75d) || 1) && $this->valueHolderb76bb = $valueHolderb76bb;

        return $this->valueHolderb76bb->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializer4f75d && ($this->initializer4f75d->__invoke($valueHolderb76bb, $this, 'refresh', array('entity' => $entity), $this->initializer4f75d) || 1) && $this->valueHolderb76bb = $valueHolderb76bb;

        return $this->valueHolderb76bb->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializer4f75d && ($this->initializer4f75d->__invoke($valueHolderb76bb, $this, 'detach', array('entity' => $entity), $this->initializer4f75d) || 1) && $this->valueHolderb76bb = $valueHolderb76bb;

        return $this->valueHolderb76bb->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializer4f75d && ($this->initializer4f75d->__invoke($valueHolderb76bb, $this, 'merge', array('entity' => $entity), $this->initializer4f75d) || 1) && $this->valueHolderb76bb = $valueHolderb76bb;

        return $this->valueHolderb76bb->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializer4f75d && ($this->initializer4f75d->__invoke($valueHolderb76bb, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializer4f75d) || 1) && $this->valueHolderb76bb = $valueHolderb76bb;

        return $this->valueHolderb76bb->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializer4f75d && ($this->initializer4f75d->__invoke($valueHolderb76bb, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer4f75d) || 1) && $this->valueHolderb76bb = $valueHolderb76bb;

        return $this->valueHolderb76bb->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializer4f75d && ($this->initializer4f75d->__invoke($valueHolderb76bb, $this, 'getRepository', array('entityName' => $entityName), $this->initializer4f75d) || 1) && $this->valueHolderb76bb = $valueHolderb76bb;

        return $this->valueHolderb76bb->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializer4f75d && ($this->initializer4f75d->__invoke($valueHolderb76bb, $this, 'contains', array('entity' => $entity), $this->initializer4f75d) || 1) && $this->valueHolderb76bb = $valueHolderb76bb;

        return $this->valueHolderb76bb->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializer4f75d && ($this->initializer4f75d->__invoke($valueHolderb76bb, $this, 'getEventManager', array(), $this->initializer4f75d) || 1) && $this->valueHolderb76bb = $valueHolderb76bb;

        return $this->valueHolderb76bb->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializer4f75d && ($this->initializer4f75d->__invoke($valueHolderb76bb, $this, 'getConfiguration', array(), $this->initializer4f75d) || 1) && $this->valueHolderb76bb = $valueHolderb76bb;

        return $this->valueHolderb76bb->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializer4f75d && ($this->initializer4f75d->__invoke($valueHolderb76bb, $this, 'isOpen', array(), $this->initializer4f75d) || 1) && $this->valueHolderb76bb = $valueHolderb76bb;

        return $this->valueHolderb76bb->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializer4f75d && ($this->initializer4f75d->__invoke($valueHolderb76bb, $this, 'getUnitOfWork', array(), $this->initializer4f75d) || 1) && $this->valueHolderb76bb = $valueHolderb76bb;

        return $this->valueHolderb76bb->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializer4f75d && ($this->initializer4f75d->__invoke($valueHolderb76bb, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializer4f75d) || 1) && $this->valueHolderb76bb = $valueHolderb76bb;

        return $this->valueHolderb76bb->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializer4f75d && ($this->initializer4f75d->__invoke($valueHolderb76bb, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializer4f75d) || 1) && $this->valueHolderb76bb = $valueHolderb76bb;

        return $this->valueHolderb76bb->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializer4f75d && ($this->initializer4f75d->__invoke($valueHolderb76bb, $this, 'getProxyFactory', array(), $this->initializer4f75d) || 1) && $this->valueHolderb76bb = $valueHolderb76bb;

        return $this->valueHolderb76bb->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializer4f75d && ($this->initializer4f75d->__invoke($valueHolderb76bb, $this, 'initializeObject', array('obj' => $obj), $this->initializer4f75d) || 1) && $this->valueHolderb76bb = $valueHolderb76bb;

        return $this->valueHolderb76bb->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializer4f75d && ($this->initializer4f75d->__invoke($valueHolderb76bb, $this, 'getFilters', array(), $this->initializer4f75d) || 1) && $this->valueHolderb76bb = $valueHolderb76bb;

        return $this->valueHolderb76bb->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializer4f75d && ($this->initializer4f75d->__invoke($valueHolderb76bb, $this, 'isFiltersStateClean', array(), $this->initializer4f75d) || 1) && $this->valueHolderb76bb = $valueHolderb76bb;

        return $this->valueHolderb76bb->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializer4f75d && ($this->initializer4f75d->__invoke($valueHolderb76bb, $this, 'hasFilters', array(), $this->initializer4f75d) || 1) && $this->valueHolderb76bb = $valueHolderb76bb;

        return $this->valueHolderb76bb->hasFilters();
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

        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $instance, 'Doctrine\\ORM\\EntityManager')->__invoke($instance);

        $instance->initializer4f75d = $initializer;

        return $instance;
    }

    public function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config)
    {
        static $reflection;

        if (! $this->valueHolderb76bb) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolderb76bb = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolderb76bb->__construct($conn, $config);
    }

    public function & __get($name)
    {
        $this->initializer4f75d && ($this->initializer4f75d->__invoke($valueHolderb76bb, $this, '__get', ['name' => $name], $this->initializer4f75d) || 1) && $this->valueHolderb76bb = $valueHolderb76bb;

        if (isset(self::$publicPropertiesedba1[$name])) {
            return $this->valueHolderb76bb->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

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

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

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

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

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

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

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
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
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

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
