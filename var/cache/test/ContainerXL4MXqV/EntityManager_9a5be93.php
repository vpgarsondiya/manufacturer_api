<?php

namespace ContainerXL4MXqV;
include_once \dirname(__DIR__, 4).'/vendor/doctrine/persistence/src/Persistence/ObjectManager.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
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

    public function getConnection()
    {
        $this->initializere924e && ($this->initializere924e->__invoke($valueHolderffe66, $this, 'getConnection', array(), $this->initializere924e) || 1) && $this->valueHolderffe66 = $valueHolderffe66;

        return $this->valueHolderffe66->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializere924e && ($this->initializere924e->__invoke($valueHolderffe66, $this, 'getMetadataFactory', array(), $this->initializere924e) || 1) && $this->valueHolderffe66 = $valueHolderffe66;

        return $this->valueHolderffe66->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializere924e && ($this->initializere924e->__invoke($valueHolderffe66, $this, 'getExpressionBuilder', array(), $this->initializere924e) || 1) && $this->valueHolderffe66 = $valueHolderffe66;

        return $this->valueHolderffe66->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializere924e && ($this->initializere924e->__invoke($valueHolderffe66, $this, 'beginTransaction', array(), $this->initializere924e) || 1) && $this->valueHolderffe66 = $valueHolderffe66;

        return $this->valueHolderffe66->beginTransaction();
    }

    public function getCache()
    {
        $this->initializere924e && ($this->initializere924e->__invoke($valueHolderffe66, $this, 'getCache', array(), $this->initializere924e) || 1) && $this->valueHolderffe66 = $valueHolderffe66;

        return $this->valueHolderffe66->getCache();
    }

    public function transactional($func)
    {
        $this->initializere924e && ($this->initializere924e->__invoke($valueHolderffe66, $this, 'transactional', array('func' => $func), $this->initializere924e) || 1) && $this->valueHolderffe66 = $valueHolderffe66;

        return $this->valueHolderffe66->transactional($func);
    }

    public function wrapInTransaction(callable $func)
    {
        $this->initializere924e && ($this->initializere924e->__invoke($valueHolderffe66, $this, 'wrapInTransaction', array('func' => $func), $this->initializere924e) || 1) && $this->valueHolderffe66 = $valueHolderffe66;

        return $this->valueHolderffe66->wrapInTransaction($func);
    }

    public function commit()
    {
        $this->initializere924e && ($this->initializere924e->__invoke($valueHolderffe66, $this, 'commit', array(), $this->initializere924e) || 1) && $this->valueHolderffe66 = $valueHolderffe66;

        return $this->valueHolderffe66->commit();
    }

    public function rollback()
    {
        $this->initializere924e && ($this->initializere924e->__invoke($valueHolderffe66, $this, 'rollback', array(), $this->initializere924e) || 1) && $this->valueHolderffe66 = $valueHolderffe66;

        return $this->valueHolderffe66->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializere924e && ($this->initializere924e->__invoke($valueHolderffe66, $this, 'getClassMetadata', array('className' => $className), $this->initializere924e) || 1) && $this->valueHolderffe66 = $valueHolderffe66;

        return $this->valueHolderffe66->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializere924e && ($this->initializere924e->__invoke($valueHolderffe66, $this, 'createQuery', array('dql' => $dql), $this->initializere924e) || 1) && $this->valueHolderffe66 = $valueHolderffe66;

        return $this->valueHolderffe66->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializere924e && ($this->initializere924e->__invoke($valueHolderffe66, $this, 'createNamedQuery', array('name' => $name), $this->initializere924e) || 1) && $this->valueHolderffe66 = $valueHolderffe66;

        return $this->valueHolderffe66->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializere924e && ($this->initializere924e->__invoke($valueHolderffe66, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializere924e) || 1) && $this->valueHolderffe66 = $valueHolderffe66;

        return $this->valueHolderffe66->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializere924e && ($this->initializere924e->__invoke($valueHolderffe66, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializere924e) || 1) && $this->valueHolderffe66 = $valueHolderffe66;

        return $this->valueHolderffe66->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializere924e && ($this->initializere924e->__invoke($valueHolderffe66, $this, 'createQueryBuilder', array(), $this->initializere924e) || 1) && $this->valueHolderffe66 = $valueHolderffe66;

        return $this->valueHolderffe66->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializere924e && ($this->initializere924e->__invoke($valueHolderffe66, $this, 'flush', array('entity' => $entity), $this->initializere924e) || 1) && $this->valueHolderffe66 = $valueHolderffe66;

        return $this->valueHolderffe66->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializere924e && ($this->initializere924e->__invoke($valueHolderffe66, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializere924e) || 1) && $this->valueHolderffe66 = $valueHolderffe66;

        return $this->valueHolderffe66->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializere924e && ($this->initializere924e->__invoke($valueHolderffe66, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializere924e) || 1) && $this->valueHolderffe66 = $valueHolderffe66;

        return $this->valueHolderffe66->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializere924e && ($this->initializere924e->__invoke($valueHolderffe66, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializere924e) || 1) && $this->valueHolderffe66 = $valueHolderffe66;

        return $this->valueHolderffe66->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializere924e && ($this->initializere924e->__invoke($valueHolderffe66, $this, 'clear', array('entityName' => $entityName), $this->initializere924e) || 1) && $this->valueHolderffe66 = $valueHolderffe66;

        return $this->valueHolderffe66->clear($entityName);
    }

    public function close()
    {
        $this->initializere924e && ($this->initializere924e->__invoke($valueHolderffe66, $this, 'close', array(), $this->initializere924e) || 1) && $this->valueHolderffe66 = $valueHolderffe66;

        return $this->valueHolderffe66->close();
    }

    public function persist($entity)
    {
        $this->initializere924e && ($this->initializere924e->__invoke($valueHolderffe66, $this, 'persist', array('entity' => $entity), $this->initializere924e) || 1) && $this->valueHolderffe66 = $valueHolderffe66;

        return $this->valueHolderffe66->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializere924e && ($this->initializere924e->__invoke($valueHolderffe66, $this, 'remove', array('entity' => $entity), $this->initializere924e) || 1) && $this->valueHolderffe66 = $valueHolderffe66;

        return $this->valueHolderffe66->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializere924e && ($this->initializere924e->__invoke($valueHolderffe66, $this, 'refresh', array('entity' => $entity), $this->initializere924e) || 1) && $this->valueHolderffe66 = $valueHolderffe66;

        return $this->valueHolderffe66->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializere924e && ($this->initializere924e->__invoke($valueHolderffe66, $this, 'detach', array('entity' => $entity), $this->initializere924e) || 1) && $this->valueHolderffe66 = $valueHolderffe66;

        return $this->valueHolderffe66->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializere924e && ($this->initializere924e->__invoke($valueHolderffe66, $this, 'merge', array('entity' => $entity), $this->initializere924e) || 1) && $this->valueHolderffe66 = $valueHolderffe66;

        return $this->valueHolderffe66->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializere924e && ($this->initializere924e->__invoke($valueHolderffe66, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializere924e) || 1) && $this->valueHolderffe66 = $valueHolderffe66;

        return $this->valueHolderffe66->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializere924e && ($this->initializere924e->__invoke($valueHolderffe66, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializere924e) || 1) && $this->valueHolderffe66 = $valueHolderffe66;

        return $this->valueHolderffe66->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializere924e && ($this->initializere924e->__invoke($valueHolderffe66, $this, 'getRepository', array('entityName' => $entityName), $this->initializere924e) || 1) && $this->valueHolderffe66 = $valueHolderffe66;

        return $this->valueHolderffe66->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializere924e && ($this->initializere924e->__invoke($valueHolderffe66, $this, 'contains', array('entity' => $entity), $this->initializere924e) || 1) && $this->valueHolderffe66 = $valueHolderffe66;

        return $this->valueHolderffe66->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializere924e && ($this->initializere924e->__invoke($valueHolderffe66, $this, 'getEventManager', array(), $this->initializere924e) || 1) && $this->valueHolderffe66 = $valueHolderffe66;

        return $this->valueHolderffe66->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializere924e && ($this->initializere924e->__invoke($valueHolderffe66, $this, 'getConfiguration', array(), $this->initializere924e) || 1) && $this->valueHolderffe66 = $valueHolderffe66;

        return $this->valueHolderffe66->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializere924e && ($this->initializere924e->__invoke($valueHolderffe66, $this, 'isOpen', array(), $this->initializere924e) || 1) && $this->valueHolderffe66 = $valueHolderffe66;

        return $this->valueHolderffe66->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializere924e && ($this->initializere924e->__invoke($valueHolderffe66, $this, 'getUnitOfWork', array(), $this->initializere924e) || 1) && $this->valueHolderffe66 = $valueHolderffe66;

        return $this->valueHolderffe66->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializere924e && ($this->initializere924e->__invoke($valueHolderffe66, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializere924e) || 1) && $this->valueHolderffe66 = $valueHolderffe66;

        return $this->valueHolderffe66->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializere924e && ($this->initializere924e->__invoke($valueHolderffe66, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializere924e) || 1) && $this->valueHolderffe66 = $valueHolderffe66;

        return $this->valueHolderffe66->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializere924e && ($this->initializere924e->__invoke($valueHolderffe66, $this, 'getProxyFactory', array(), $this->initializere924e) || 1) && $this->valueHolderffe66 = $valueHolderffe66;

        return $this->valueHolderffe66->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializere924e && ($this->initializere924e->__invoke($valueHolderffe66, $this, 'initializeObject', array('obj' => $obj), $this->initializere924e) || 1) && $this->valueHolderffe66 = $valueHolderffe66;

        return $this->valueHolderffe66->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializere924e && ($this->initializere924e->__invoke($valueHolderffe66, $this, 'getFilters', array(), $this->initializere924e) || 1) && $this->valueHolderffe66 = $valueHolderffe66;

        return $this->valueHolderffe66->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializere924e && ($this->initializere924e->__invoke($valueHolderffe66, $this, 'isFiltersStateClean', array(), $this->initializere924e) || 1) && $this->valueHolderffe66 = $valueHolderffe66;

        return $this->valueHolderffe66->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializere924e && ($this->initializere924e->__invoke($valueHolderffe66, $this, 'hasFilters', array(), $this->initializere924e) || 1) && $this->valueHolderffe66 = $valueHolderffe66;

        return $this->valueHolderffe66->hasFilters();
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

        $instance->initializere924e = $initializer;

        return $instance;
    }

    public function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config)
    {
        static $reflection;

        if (! $this->valueHolderffe66) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolderffe66 = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolderffe66->__construct($conn, $config);
    }

    public function & __get($name)
    {
        $this->initializere924e && ($this->initializere924e->__invoke($valueHolderffe66, $this, '__get', ['name' => $name], $this->initializere924e) || 1) && $this->valueHolderffe66 = $valueHolderffe66;

        if (isset(self::$publicProperties7b032[$name])) {
            return $this->valueHolderffe66->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

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

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

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

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

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

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

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
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
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

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
