<?php

namespace ContainerW6CKbQx;
include_once \dirname(__DIR__, 4).'/vendor/doctrine/persistence/src/Persistence/ObjectManager.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolder7d141 = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializerfe3a3 = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicProperties79d05 = [
        
    ];

    public function getConnection()
    {
        $this->initializerfe3a3 && ($this->initializerfe3a3->__invoke($valueHolder7d141, $this, 'getConnection', array(), $this->initializerfe3a3) || 1) && $this->valueHolder7d141 = $valueHolder7d141;

        return $this->valueHolder7d141->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializerfe3a3 && ($this->initializerfe3a3->__invoke($valueHolder7d141, $this, 'getMetadataFactory', array(), $this->initializerfe3a3) || 1) && $this->valueHolder7d141 = $valueHolder7d141;

        return $this->valueHolder7d141->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializerfe3a3 && ($this->initializerfe3a3->__invoke($valueHolder7d141, $this, 'getExpressionBuilder', array(), $this->initializerfe3a3) || 1) && $this->valueHolder7d141 = $valueHolder7d141;

        return $this->valueHolder7d141->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializerfe3a3 && ($this->initializerfe3a3->__invoke($valueHolder7d141, $this, 'beginTransaction', array(), $this->initializerfe3a3) || 1) && $this->valueHolder7d141 = $valueHolder7d141;

        return $this->valueHolder7d141->beginTransaction();
    }

    public function getCache()
    {
        $this->initializerfe3a3 && ($this->initializerfe3a3->__invoke($valueHolder7d141, $this, 'getCache', array(), $this->initializerfe3a3) || 1) && $this->valueHolder7d141 = $valueHolder7d141;

        return $this->valueHolder7d141->getCache();
    }

    public function transactional($func)
    {
        $this->initializerfe3a3 && ($this->initializerfe3a3->__invoke($valueHolder7d141, $this, 'transactional', array('func' => $func), $this->initializerfe3a3) || 1) && $this->valueHolder7d141 = $valueHolder7d141;

        return $this->valueHolder7d141->transactional($func);
    }

    public function wrapInTransaction(callable $func)
    {
        $this->initializerfe3a3 && ($this->initializerfe3a3->__invoke($valueHolder7d141, $this, 'wrapInTransaction', array('func' => $func), $this->initializerfe3a3) || 1) && $this->valueHolder7d141 = $valueHolder7d141;

        return $this->valueHolder7d141->wrapInTransaction($func);
    }

    public function commit()
    {
        $this->initializerfe3a3 && ($this->initializerfe3a3->__invoke($valueHolder7d141, $this, 'commit', array(), $this->initializerfe3a3) || 1) && $this->valueHolder7d141 = $valueHolder7d141;

        return $this->valueHolder7d141->commit();
    }

    public function rollback()
    {
        $this->initializerfe3a3 && ($this->initializerfe3a3->__invoke($valueHolder7d141, $this, 'rollback', array(), $this->initializerfe3a3) || 1) && $this->valueHolder7d141 = $valueHolder7d141;

        return $this->valueHolder7d141->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializerfe3a3 && ($this->initializerfe3a3->__invoke($valueHolder7d141, $this, 'getClassMetadata', array('className' => $className), $this->initializerfe3a3) || 1) && $this->valueHolder7d141 = $valueHolder7d141;

        return $this->valueHolder7d141->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializerfe3a3 && ($this->initializerfe3a3->__invoke($valueHolder7d141, $this, 'createQuery', array('dql' => $dql), $this->initializerfe3a3) || 1) && $this->valueHolder7d141 = $valueHolder7d141;

        return $this->valueHolder7d141->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializerfe3a3 && ($this->initializerfe3a3->__invoke($valueHolder7d141, $this, 'createNamedQuery', array('name' => $name), $this->initializerfe3a3) || 1) && $this->valueHolder7d141 = $valueHolder7d141;

        return $this->valueHolder7d141->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializerfe3a3 && ($this->initializerfe3a3->__invoke($valueHolder7d141, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializerfe3a3) || 1) && $this->valueHolder7d141 = $valueHolder7d141;

        return $this->valueHolder7d141->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializerfe3a3 && ($this->initializerfe3a3->__invoke($valueHolder7d141, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializerfe3a3) || 1) && $this->valueHolder7d141 = $valueHolder7d141;

        return $this->valueHolder7d141->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializerfe3a3 && ($this->initializerfe3a3->__invoke($valueHolder7d141, $this, 'createQueryBuilder', array(), $this->initializerfe3a3) || 1) && $this->valueHolder7d141 = $valueHolder7d141;

        return $this->valueHolder7d141->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializerfe3a3 && ($this->initializerfe3a3->__invoke($valueHolder7d141, $this, 'flush', array('entity' => $entity), $this->initializerfe3a3) || 1) && $this->valueHolder7d141 = $valueHolder7d141;

        return $this->valueHolder7d141->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializerfe3a3 && ($this->initializerfe3a3->__invoke($valueHolder7d141, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializerfe3a3) || 1) && $this->valueHolder7d141 = $valueHolder7d141;

        return $this->valueHolder7d141->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializerfe3a3 && ($this->initializerfe3a3->__invoke($valueHolder7d141, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializerfe3a3) || 1) && $this->valueHolder7d141 = $valueHolder7d141;

        return $this->valueHolder7d141->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializerfe3a3 && ($this->initializerfe3a3->__invoke($valueHolder7d141, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializerfe3a3) || 1) && $this->valueHolder7d141 = $valueHolder7d141;

        return $this->valueHolder7d141->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializerfe3a3 && ($this->initializerfe3a3->__invoke($valueHolder7d141, $this, 'clear', array('entityName' => $entityName), $this->initializerfe3a3) || 1) && $this->valueHolder7d141 = $valueHolder7d141;

        return $this->valueHolder7d141->clear($entityName);
    }

    public function close()
    {
        $this->initializerfe3a3 && ($this->initializerfe3a3->__invoke($valueHolder7d141, $this, 'close', array(), $this->initializerfe3a3) || 1) && $this->valueHolder7d141 = $valueHolder7d141;

        return $this->valueHolder7d141->close();
    }

    public function persist($entity)
    {
        $this->initializerfe3a3 && ($this->initializerfe3a3->__invoke($valueHolder7d141, $this, 'persist', array('entity' => $entity), $this->initializerfe3a3) || 1) && $this->valueHolder7d141 = $valueHolder7d141;

        return $this->valueHolder7d141->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializerfe3a3 && ($this->initializerfe3a3->__invoke($valueHolder7d141, $this, 'remove', array('entity' => $entity), $this->initializerfe3a3) || 1) && $this->valueHolder7d141 = $valueHolder7d141;

        return $this->valueHolder7d141->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializerfe3a3 && ($this->initializerfe3a3->__invoke($valueHolder7d141, $this, 'refresh', array('entity' => $entity), $this->initializerfe3a3) || 1) && $this->valueHolder7d141 = $valueHolder7d141;

        return $this->valueHolder7d141->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializerfe3a3 && ($this->initializerfe3a3->__invoke($valueHolder7d141, $this, 'detach', array('entity' => $entity), $this->initializerfe3a3) || 1) && $this->valueHolder7d141 = $valueHolder7d141;

        return $this->valueHolder7d141->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializerfe3a3 && ($this->initializerfe3a3->__invoke($valueHolder7d141, $this, 'merge', array('entity' => $entity), $this->initializerfe3a3) || 1) && $this->valueHolder7d141 = $valueHolder7d141;

        return $this->valueHolder7d141->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializerfe3a3 && ($this->initializerfe3a3->__invoke($valueHolder7d141, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializerfe3a3) || 1) && $this->valueHolder7d141 = $valueHolder7d141;

        return $this->valueHolder7d141->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializerfe3a3 && ($this->initializerfe3a3->__invoke($valueHolder7d141, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializerfe3a3) || 1) && $this->valueHolder7d141 = $valueHolder7d141;

        return $this->valueHolder7d141->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializerfe3a3 && ($this->initializerfe3a3->__invoke($valueHolder7d141, $this, 'getRepository', array('entityName' => $entityName), $this->initializerfe3a3) || 1) && $this->valueHolder7d141 = $valueHolder7d141;

        return $this->valueHolder7d141->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializerfe3a3 && ($this->initializerfe3a3->__invoke($valueHolder7d141, $this, 'contains', array('entity' => $entity), $this->initializerfe3a3) || 1) && $this->valueHolder7d141 = $valueHolder7d141;

        return $this->valueHolder7d141->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializerfe3a3 && ($this->initializerfe3a3->__invoke($valueHolder7d141, $this, 'getEventManager', array(), $this->initializerfe3a3) || 1) && $this->valueHolder7d141 = $valueHolder7d141;

        return $this->valueHolder7d141->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializerfe3a3 && ($this->initializerfe3a3->__invoke($valueHolder7d141, $this, 'getConfiguration', array(), $this->initializerfe3a3) || 1) && $this->valueHolder7d141 = $valueHolder7d141;

        return $this->valueHolder7d141->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializerfe3a3 && ($this->initializerfe3a3->__invoke($valueHolder7d141, $this, 'isOpen', array(), $this->initializerfe3a3) || 1) && $this->valueHolder7d141 = $valueHolder7d141;

        return $this->valueHolder7d141->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializerfe3a3 && ($this->initializerfe3a3->__invoke($valueHolder7d141, $this, 'getUnitOfWork', array(), $this->initializerfe3a3) || 1) && $this->valueHolder7d141 = $valueHolder7d141;

        return $this->valueHolder7d141->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializerfe3a3 && ($this->initializerfe3a3->__invoke($valueHolder7d141, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializerfe3a3) || 1) && $this->valueHolder7d141 = $valueHolder7d141;

        return $this->valueHolder7d141->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializerfe3a3 && ($this->initializerfe3a3->__invoke($valueHolder7d141, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializerfe3a3) || 1) && $this->valueHolder7d141 = $valueHolder7d141;

        return $this->valueHolder7d141->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializerfe3a3 && ($this->initializerfe3a3->__invoke($valueHolder7d141, $this, 'getProxyFactory', array(), $this->initializerfe3a3) || 1) && $this->valueHolder7d141 = $valueHolder7d141;

        return $this->valueHolder7d141->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializerfe3a3 && ($this->initializerfe3a3->__invoke($valueHolder7d141, $this, 'initializeObject', array('obj' => $obj), $this->initializerfe3a3) || 1) && $this->valueHolder7d141 = $valueHolder7d141;

        return $this->valueHolder7d141->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializerfe3a3 && ($this->initializerfe3a3->__invoke($valueHolder7d141, $this, 'getFilters', array(), $this->initializerfe3a3) || 1) && $this->valueHolder7d141 = $valueHolder7d141;

        return $this->valueHolder7d141->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializerfe3a3 && ($this->initializerfe3a3->__invoke($valueHolder7d141, $this, 'isFiltersStateClean', array(), $this->initializerfe3a3) || 1) && $this->valueHolder7d141 = $valueHolder7d141;

        return $this->valueHolder7d141->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializerfe3a3 && ($this->initializerfe3a3->__invoke($valueHolder7d141, $this, 'hasFilters', array(), $this->initializerfe3a3) || 1) && $this->valueHolder7d141 = $valueHolder7d141;

        return $this->valueHolder7d141->hasFilters();
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

        $instance->initializerfe3a3 = $initializer;

        return $instance;
    }

    public function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config)
    {
        static $reflection;

        if (! $this->valueHolder7d141) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolder7d141 = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolder7d141->__construct($conn, $config);
    }

    public function & __get($name)
    {
        $this->initializerfe3a3 && ($this->initializerfe3a3->__invoke($valueHolder7d141, $this, '__get', ['name' => $name], $this->initializerfe3a3) || 1) && $this->valueHolder7d141 = $valueHolder7d141;

        if (isset(self::$publicProperties79d05[$name])) {
            return $this->valueHolder7d141->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder7d141;

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

        $targetObject = $this->valueHolder7d141;
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
        $this->initializerfe3a3 && ($this->initializerfe3a3->__invoke($valueHolder7d141, $this, '__set', array('name' => $name, 'value' => $value), $this->initializerfe3a3) || 1) && $this->valueHolder7d141 = $valueHolder7d141;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder7d141;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolder7d141;
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
        $this->initializerfe3a3 && ($this->initializerfe3a3->__invoke($valueHolder7d141, $this, '__isset', array('name' => $name), $this->initializerfe3a3) || 1) && $this->valueHolder7d141 = $valueHolder7d141;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder7d141;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolder7d141;
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
        $this->initializerfe3a3 && ($this->initializerfe3a3->__invoke($valueHolder7d141, $this, '__unset', array('name' => $name), $this->initializerfe3a3) || 1) && $this->valueHolder7d141 = $valueHolder7d141;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder7d141;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolder7d141;
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
        $this->initializerfe3a3 && ($this->initializerfe3a3->__invoke($valueHolder7d141, $this, '__clone', array(), $this->initializerfe3a3) || 1) && $this->valueHolder7d141 = $valueHolder7d141;

        $this->valueHolder7d141 = clone $this->valueHolder7d141;
    }

    public function __sleep()
    {
        $this->initializerfe3a3 && ($this->initializerfe3a3->__invoke($valueHolder7d141, $this, '__sleep', array(), $this->initializerfe3a3) || 1) && $this->valueHolder7d141 = $valueHolder7d141;

        return array('valueHolder7d141');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializerfe3a3 = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializerfe3a3;
    }

    public function initializeProxy() : bool
    {
        return $this->initializerfe3a3 && ($this->initializerfe3a3->__invoke($valueHolder7d141, $this, 'initializeProxy', array(), $this->initializerfe3a3) || 1) && $this->valueHolder7d141 = $valueHolder7d141;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolder7d141;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder7d141;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
