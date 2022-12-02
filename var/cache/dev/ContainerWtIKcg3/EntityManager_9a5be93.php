<?php

namespace ContainerWtIKcg3;
include_once \dirname(__DIR__, 4).'/vendor/doctrine/persistence/src/Persistence/ObjectManager.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
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

    public function getConnection()
    {
        $this->initializere3194 && ($this->initializere3194->__invoke($valueHolder46c0d, $this, 'getConnection', array(), $this->initializere3194) || 1) && $this->valueHolder46c0d = $valueHolder46c0d;

        return $this->valueHolder46c0d->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializere3194 && ($this->initializere3194->__invoke($valueHolder46c0d, $this, 'getMetadataFactory', array(), $this->initializere3194) || 1) && $this->valueHolder46c0d = $valueHolder46c0d;

        return $this->valueHolder46c0d->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializere3194 && ($this->initializere3194->__invoke($valueHolder46c0d, $this, 'getExpressionBuilder', array(), $this->initializere3194) || 1) && $this->valueHolder46c0d = $valueHolder46c0d;

        return $this->valueHolder46c0d->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializere3194 && ($this->initializere3194->__invoke($valueHolder46c0d, $this, 'beginTransaction', array(), $this->initializere3194) || 1) && $this->valueHolder46c0d = $valueHolder46c0d;

        return $this->valueHolder46c0d->beginTransaction();
    }

    public function getCache()
    {
        $this->initializere3194 && ($this->initializere3194->__invoke($valueHolder46c0d, $this, 'getCache', array(), $this->initializere3194) || 1) && $this->valueHolder46c0d = $valueHolder46c0d;

        return $this->valueHolder46c0d->getCache();
    }

    public function transactional($func)
    {
        $this->initializere3194 && ($this->initializere3194->__invoke($valueHolder46c0d, $this, 'transactional', array('func' => $func), $this->initializere3194) || 1) && $this->valueHolder46c0d = $valueHolder46c0d;

        return $this->valueHolder46c0d->transactional($func);
    }

    public function wrapInTransaction(callable $func)
    {
        $this->initializere3194 && ($this->initializere3194->__invoke($valueHolder46c0d, $this, 'wrapInTransaction', array('func' => $func), $this->initializere3194) || 1) && $this->valueHolder46c0d = $valueHolder46c0d;

        return $this->valueHolder46c0d->wrapInTransaction($func);
    }

    public function commit()
    {
        $this->initializere3194 && ($this->initializere3194->__invoke($valueHolder46c0d, $this, 'commit', array(), $this->initializere3194) || 1) && $this->valueHolder46c0d = $valueHolder46c0d;

        return $this->valueHolder46c0d->commit();
    }

    public function rollback()
    {
        $this->initializere3194 && ($this->initializere3194->__invoke($valueHolder46c0d, $this, 'rollback', array(), $this->initializere3194) || 1) && $this->valueHolder46c0d = $valueHolder46c0d;

        return $this->valueHolder46c0d->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializere3194 && ($this->initializere3194->__invoke($valueHolder46c0d, $this, 'getClassMetadata', array('className' => $className), $this->initializere3194) || 1) && $this->valueHolder46c0d = $valueHolder46c0d;

        return $this->valueHolder46c0d->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializere3194 && ($this->initializere3194->__invoke($valueHolder46c0d, $this, 'createQuery', array('dql' => $dql), $this->initializere3194) || 1) && $this->valueHolder46c0d = $valueHolder46c0d;

        return $this->valueHolder46c0d->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializere3194 && ($this->initializere3194->__invoke($valueHolder46c0d, $this, 'createNamedQuery', array('name' => $name), $this->initializere3194) || 1) && $this->valueHolder46c0d = $valueHolder46c0d;

        return $this->valueHolder46c0d->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializere3194 && ($this->initializere3194->__invoke($valueHolder46c0d, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializere3194) || 1) && $this->valueHolder46c0d = $valueHolder46c0d;

        return $this->valueHolder46c0d->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializere3194 && ($this->initializere3194->__invoke($valueHolder46c0d, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializere3194) || 1) && $this->valueHolder46c0d = $valueHolder46c0d;

        return $this->valueHolder46c0d->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializere3194 && ($this->initializere3194->__invoke($valueHolder46c0d, $this, 'createQueryBuilder', array(), $this->initializere3194) || 1) && $this->valueHolder46c0d = $valueHolder46c0d;

        return $this->valueHolder46c0d->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializere3194 && ($this->initializere3194->__invoke($valueHolder46c0d, $this, 'flush', array('entity' => $entity), $this->initializere3194) || 1) && $this->valueHolder46c0d = $valueHolder46c0d;

        return $this->valueHolder46c0d->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializere3194 && ($this->initializere3194->__invoke($valueHolder46c0d, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializere3194) || 1) && $this->valueHolder46c0d = $valueHolder46c0d;

        return $this->valueHolder46c0d->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializere3194 && ($this->initializere3194->__invoke($valueHolder46c0d, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializere3194) || 1) && $this->valueHolder46c0d = $valueHolder46c0d;

        return $this->valueHolder46c0d->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializere3194 && ($this->initializere3194->__invoke($valueHolder46c0d, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializere3194) || 1) && $this->valueHolder46c0d = $valueHolder46c0d;

        return $this->valueHolder46c0d->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializere3194 && ($this->initializere3194->__invoke($valueHolder46c0d, $this, 'clear', array('entityName' => $entityName), $this->initializere3194) || 1) && $this->valueHolder46c0d = $valueHolder46c0d;

        return $this->valueHolder46c0d->clear($entityName);
    }

    public function close()
    {
        $this->initializere3194 && ($this->initializere3194->__invoke($valueHolder46c0d, $this, 'close', array(), $this->initializere3194) || 1) && $this->valueHolder46c0d = $valueHolder46c0d;

        return $this->valueHolder46c0d->close();
    }

    public function persist($entity)
    {
        $this->initializere3194 && ($this->initializere3194->__invoke($valueHolder46c0d, $this, 'persist', array('entity' => $entity), $this->initializere3194) || 1) && $this->valueHolder46c0d = $valueHolder46c0d;

        return $this->valueHolder46c0d->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializere3194 && ($this->initializere3194->__invoke($valueHolder46c0d, $this, 'remove', array('entity' => $entity), $this->initializere3194) || 1) && $this->valueHolder46c0d = $valueHolder46c0d;

        return $this->valueHolder46c0d->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializere3194 && ($this->initializere3194->__invoke($valueHolder46c0d, $this, 'refresh', array('entity' => $entity), $this->initializere3194) || 1) && $this->valueHolder46c0d = $valueHolder46c0d;

        return $this->valueHolder46c0d->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializere3194 && ($this->initializere3194->__invoke($valueHolder46c0d, $this, 'detach', array('entity' => $entity), $this->initializere3194) || 1) && $this->valueHolder46c0d = $valueHolder46c0d;

        return $this->valueHolder46c0d->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializere3194 && ($this->initializere3194->__invoke($valueHolder46c0d, $this, 'merge', array('entity' => $entity), $this->initializere3194) || 1) && $this->valueHolder46c0d = $valueHolder46c0d;

        return $this->valueHolder46c0d->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializere3194 && ($this->initializere3194->__invoke($valueHolder46c0d, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializere3194) || 1) && $this->valueHolder46c0d = $valueHolder46c0d;

        return $this->valueHolder46c0d->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializere3194 && ($this->initializere3194->__invoke($valueHolder46c0d, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializere3194) || 1) && $this->valueHolder46c0d = $valueHolder46c0d;

        return $this->valueHolder46c0d->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializere3194 && ($this->initializere3194->__invoke($valueHolder46c0d, $this, 'getRepository', array('entityName' => $entityName), $this->initializere3194) || 1) && $this->valueHolder46c0d = $valueHolder46c0d;

        return $this->valueHolder46c0d->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializere3194 && ($this->initializere3194->__invoke($valueHolder46c0d, $this, 'contains', array('entity' => $entity), $this->initializere3194) || 1) && $this->valueHolder46c0d = $valueHolder46c0d;

        return $this->valueHolder46c0d->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializere3194 && ($this->initializere3194->__invoke($valueHolder46c0d, $this, 'getEventManager', array(), $this->initializere3194) || 1) && $this->valueHolder46c0d = $valueHolder46c0d;

        return $this->valueHolder46c0d->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializere3194 && ($this->initializere3194->__invoke($valueHolder46c0d, $this, 'getConfiguration', array(), $this->initializere3194) || 1) && $this->valueHolder46c0d = $valueHolder46c0d;

        return $this->valueHolder46c0d->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializere3194 && ($this->initializere3194->__invoke($valueHolder46c0d, $this, 'isOpen', array(), $this->initializere3194) || 1) && $this->valueHolder46c0d = $valueHolder46c0d;

        return $this->valueHolder46c0d->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializere3194 && ($this->initializere3194->__invoke($valueHolder46c0d, $this, 'getUnitOfWork', array(), $this->initializere3194) || 1) && $this->valueHolder46c0d = $valueHolder46c0d;

        return $this->valueHolder46c0d->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializere3194 && ($this->initializere3194->__invoke($valueHolder46c0d, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializere3194) || 1) && $this->valueHolder46c0d = $valueHolder46c0d;

        return $this->valueHolder46c0d->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializere3194 && ($this->initializere3194->__invoke($valueHolder46c0d, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializere3194) || 1) && $this->valueHolder46c0d = $valueHolder46c0d;

        return $this->valueHolder46c0d->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializere3194 && ($this->initializere3194->__invoke($valueHolder46c0d, $this, 'getProxyFactory', array(), $this->initializere3194) || 1) && $this->valueHolder46c0d = $valueHolder46c0d;

        return $this->valueHolder46c0d->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializere3194 && ($this->initializere3194->__invoke($valueHolder46c0d, $this, 'initializeObject', array('obj' => $obj), $this->initializere3194) || 1) && $this->valueHolder46c0d = $valueHolder46c0d;

        return $this->valueHolder46c0d->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializere3194 && ($this->initializere3194->__invoke($valueHolder46c0d, $this, 'getFilters', array(), $this->initializere3194) || 1) && $this->valueHolder46c0d = $valueHolder46c0d;

        return $this->valueHolder46c0d->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializere3194 && ($this->initializere3194->__invoke($valueHolder46c0d, $this, 'isFiltersStateClean', array(), $this->initializere3194) || 1) && $this->valueHolder46c0d = $valueHolder46c0d;

        return $this->valueHolder46c0d->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializere3194 && ($this->initializere3194->__invoke($valueHolder46c0d, $this, 'hasFilters', array(), $this->initializere3194) || 1) && $this->valueHolder46c0d = $valueHolder46c0d;

        return $this->valueHolder46c0d->hasFilters();
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

        $instance->initializere3194 = $initializer;

        return $instance;
    }

    public function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config)
    {
        static $reflection;

        if (! $this->valueHolder46c0d) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolder46c0d = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolder46c0d->__construct($conn, $config);
    }

    public function & __get($name)
    {
        $this->initializere3194 && ($this->initializere3194->__invoke($valueHolder46c0d, $this, '__get', ['name' => $name], $this->initializere3194) || 1) && $this->valueHolder46c0d = $valueHolder46c0d;

        if (isset(self::$publicProperties9460d[$name])) {
            return $this->valueHolder46c0d->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

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

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

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

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

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

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

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
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
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

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
