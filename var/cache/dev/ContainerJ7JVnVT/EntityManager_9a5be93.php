<?php

namespace ContainerJ7JVnVT;
include_once \dirname(__DIR__, 4).'/vendor/doctrine/persistence/src/Persistence/ObjectManager.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolder1066e = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializer553c9 = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicProperties0d83c = [
        
    ];

    public function getConnection()
    {
        $this->initializer553c9 && ($this->initializer553c9->__invoke($valueHolder1066e, $this, 'getConnection', array(), $this->initializer553c9) || 1) && $this->valueHolder1066e = $valueHolder1066e;

        return $this->valueHolder1066e->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializer553c9 && ($this->initializer553c9->__invoke($valueHolder1066e, $this, 'getMetadataFactory', array(), $this->initializer553c9) || 1) && $this->valueHolder1066e = $valueHolder1066e;

        return $this->valueHolder1066e->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializer553c9 && ($this->initializer553c9->__invoke($valueHolder1066e, $this, 'getExpressionBuilder', array(), $this->initializer553c9) || 1) && $this->valueHolder1066e = $valueHolder1066e;

        return $this->valueHolder1066e->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializer553c9 && ($this->initializer553c9->__invoke($valueHolder1066e, $this, 'beginTransaction', array(), $this->initializer553c9) || 1) && $this->valueHolder1066e = $valueHolder1066e;

        return $this->valueHolder1066e->beginTransaction();
    }

    public function getCache()
    {
        $this->initializer553c9 && ($this->initializer553c9->__invoke($valueHolder1066e, $this, 'getCache', array(), $this->initializer553c9) || 1) && $this->valueHolder1066e = $valueHolder1066e;

        return $this->valueHolder1066e->getCache();
    }

    public function transactional($func)
    {
        $this->initializer553c9 && ($this->initializer553c9->__invoke($valueHolder1066e, $this, 'transactional', array('func' => $func), $this->initializer553c9) || 1) && $this->valueHolder1066e = $valueHolder1066e;

        return $this->valueHolder1066e->transactional($func);
    }

    public function wrapInTransaction(callable $func)
    {
        $this->initializer553c9 && ($this->initializer553c9->__invoke($valueHolder1066e, $this, 'wrapInTransaction', array('func' => $func), $this->initializer553c9) || 1) && $this->valueHolder1066e = $valueHolder1066e;

        return $this->valueHolder1066e->wrapInTransaction($func);
    }

    public function commit()
    {
        $this->initializer553c9 && ($this->initializer553c9->__invoke($valueHolder1066e, $this, 'commit', array(), $this->initializer553c9) || 1) && $this->valueHolder1066e = $valueHolder1066e;

        return $this->valueHolder1066e->commit();
    }

    public function rollback()
    {
        $this->initializer553c9 && ($this->initializer553c9->__invoke($valueHolder1066e, $this, 'rollback', array(), $this->initializer553c9) || 1) && $this->valueHolder1066e = $valueHolder1066e;

        return $this->valueHolder1066e->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializer553c9 && ($this->initializer553c9->__invoke($valueHolder1066e, $this, 'getClassMetadata', array('className' => $className), $this->initializer553c9) || 1) && $this->valueHolder1066e = $valueHolder1066e;

        return $this->valueHolder1066e->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializer553c9 && ($this->initializer553c9->__invoke($valueHolder1066e, $this, 'createQuery', array('dql' => $dql), $this->initializer553c9) || 1) && $this->valueHolder1066e = $valueHolder1066e;

        return $this->valueHolder1066e->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializer553c9 && ($this->initializer553c9->__invoke($valueHolder1066e, $this, 'createNamedQuery', array('name' => $name), $this->initializer553c9) || 1) && $this->valueHolder1066e = $valueHolder1066e;

        return $this->valueHolder1066e->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializer553c9 && ($this->initializer553c9->__invoke($valueHolder1066e, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializer553c9) || 1) && $this->valueHolder1066e = $valueHolder1066e;

        return $this->valueHolder1066e->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializer553c9 && ($this->initializer553c9->__invoke($valueHolder1066e, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializer553c9) || 1) && $this->valueHolder1066e = $valueHolder1066e;

        return $this->valueHolder1066e->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializer553c9 && ($this->initializer553c9->__invoke($valueHolder1066e, $this, 'createQueryBuilder', array(), $this->initializer553c9) || 1) && $this->valueHolder1066e = $valueHolder1066e;

        return $this->valueHolder1066e->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializer553c9 && ($this->initializer553c9->__invoke($valueHolder1066e, $this, 'flush', array('entity' => $entity), $this->initializer553c9) || 1) && $this->valueHolder1066e = $valueHolder1066e;

        return $this->valueHolder1066e->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializer553c9 && ($this->initializer553c9->__invoke($valueHolder1066e, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer553c9) || 1) && $this->valueHolder1066e = $valueHolder1066e;

        return $this->valueHolder1066e->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializer553c9 && ($this->initializer553c9->__invoke($valueHolder1066e, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializer553c9) || 1) && $this->valueHolder1066e = $valueHolder1066e;

        return $this->valueHolder1066e->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializer553c9 && ($this->initializer553c9->__invoke($valueHolder1066e, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializer553c9) || 1) && $this->valueHolder1066e = $valueHolder1066e;

        return $this->valueHolder1066e->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializer553c9 && ($this->initializer553c9->__invoke($valueHolder1066e, $this, 'clear', array('entityName' => $entityName), $this->initializer553c9) || 1) && $this->valueHolder1066e = $valueHolder1066e;

        return $this->valueHolder1066e->clear($entityName);
    }

    public function close()
    {
        $this->initializer553c9 && ($this->initializer553c9->__invoke($valueHolder1066e, $this, 'close', array(), $this->initializer553c9) || 1) && $this->valueHolder1066e = $valueHolder1066e;

        return $this->valueHolder1066e->close();
    }

    public function persist($entity)
    {
        $this->initializer553c9 && ($this->initializer553c9->__invoke($valueHolder1066e, $this, 'persist', array('entity' => $entity), $this->initializer553c9) || 1) && $this->valueHolder1066e = $valueHolder1066e;

        return $this->valueHolder1066e->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializer553c9 && ($this->initializer553c9->__invoke($valueHolder1066e, $this, 'remove', array('entity' => $entity), $this->initializer553c9) || 1) && $this->valueHolder1066e = $valueHolder1066e;

        return $this->valueHolder1066e->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializer553c9 && ($this->initializer553c9->__invoke($valueHolder1066e, $this, 'refresh', array('entity' => $entity), $this->initializer553c9) || 1) && $this->valueHolder1066e = $valueHolder1066e;

        return $this->valueHolder1066e->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializer553c9 && ($this->initializer553c9->__invoke($valueHolder1066e, $this, 'detach', array('entity' => $entity), $this->initializer553c9) || 1) && $this->valueHolder1066e = $valueHolder1066e;

        return $this->valueHolder1066e->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializer553c9 && ($this->initializer553c9->__invoke($valueHolder1066e, $this, 'merge', array('entity' => $entity), $this->initializer553c9) || 1) && $this->valueHolder1066e = $valueHolder1066e;

        return $this->valueHolder1066e->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializer553c9 && ($this->initializer553c9->__invoke($valueHolder1066e, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializer553c9) || 1) && $this->valueHolder1066e = $valueHolder1066e;

        return $this->valueHolder1066e->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializer553c9 && ($this->initializer553c9->__invoke($valueHolder1066e, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer553c9) || 1) && $this->valueHolder1066e = $valueHolder1066e;

        return $this->valueHolder1066e->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializer553c9 && ($this->initializer553c9->__invoke($valueHolder1066e, $this, 'getRepository', array('entityName' => $entityName), $this->initializer553c9) || 1) && $this->valueHolder1066e = $valueHolder1066e;

        return $this->valueHolder1066e->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializer553c9 && ($this->initializer553c9->__invoke($valueHolder1066e, $this, 'contains', array('entity' => $entity), $this->initializer553c9) || 1) && $this->valueHolder1066e = $valueHolder1066e;

        return $this->valueHolder1066e->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializer553c9 && ($this->initializer553c9->__invoke($valueHolder1066e, $this, 'getEventManager', array(), $this->initializer553c9) || 1) && $this->valueHolder1066e = $valueHolder1066e;

        return $this->valueHolder1066e->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializer553c9 && ($this->initializer553c9->__invoke($valueHolder1066e, $this, 'getConfiguration', array(), $this->initializer553c9) || 1) && $this->valueHolder1066e = $valueHolder1066e;

        return $this->valueHolder1066e->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializer553c9 && ($this->initializer553c9->__invoke($valueHolder1066e, $this, 'isOpen', array(), $this->initializer553c9) || 1) && $this->valueHolder1066e = $valueHolder1066e;

        return $this->valueHolder1066e->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializer553c9 && ($this->initializer553c9->__invoke($valueHolder1066e, $this, 'getUnitOfWork', array(), $this->initializer553c9) || 1) && $this->valueHolder1066e = $valueHolder1066e;

        return $this->valueHolder1066e->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializer553c9 && ($this->initializer553c9->__invoke($valueHolder1066e, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializer553c9) || 1) && $this->valueHolder1066e = $valueHolder1066e;

        return $this->valueHolder1066e->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializer553c9 && ($this->initializer553c9->__invoke($valueHolder1066e, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializer553c9) || 1) && $this->valueHolder1066e = $valueHolder1066e;

        return $this->valueHolder1066e->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializer553c9 && ($this->initializer553c9->__invoke($valueHolder1066e, $this, 'getProxyFactory', array(), $this->initializer553c9) || 1) && $this->valueHolder1066e = $valueHolder1066e;

        return $this->valueHolder1066e->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializer553c9 && ($this->initializer553c9->__invoke($valueHolder1066e, $this, 'initializeObject', array('obj' => $obj), $this->initializer553c9) || 1) && $this->valueHolder1066e = $valueHolder1066e;

        return $this->valueHolder1066e->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializer553c9 && ($this->initializer553c9->__invoke($valueHolder1066e, $this, 'getFilters', array(), $this->initializer553c9) || 1) && $this->valueHolder1066e = $valueHolder1066e;

        return $this->valueHolder1066e->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializer553c9 && ($this->initializer553c9->__invoke($valueHolder1066e, $this, 'isFiltersStateClean', array(), $this->initializer553c9) || 1) && $this->valueHolder1066e = $valueHolder1066e;

        return $this->valueHolder1066e->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializer553c9 && ($this->initializer553c9->__invoke($valueHolder1066e, $this, 'hasFilters', array(), $this->initializer553c9) || 1) && $this->valueHolder1066e = $valueHolder1066e;

        return $this->valueHolder1066e->hasFilters();
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

        $instance->initializer553c9 = $initializer;

        return $instance;
    }

    public function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config)
    {
        static $reflection;

        if (! $this->valueHolder1066e) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolder1066e = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolder1066e->__construct($conn, $config);
    }

    public function & __get($name)
    {
        $this->initializer553c9 && ($this->initializer553c9->__invoke($valueHolder1066e, $this, '__get', ['name' => $name], $this->initializer553c9) || 1) && $this->valueHolder1066e = $valueHolder1066e;

        if (isset(self::$publicProperties0d83c[$name])) {
            return $this->valueHolder1066e->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder1066e;

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

        $targetObject = $this->valueHolder1066e;
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
        $this->initializer553c9 && ($this->initializer553c9->__invoke($valueHolder1066e, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer553c9) || 1) && $this->valueHolder1066e = $valueHolder1066e;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder1066e;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolder1066e;
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
        $this->initializer553c9 && ($this->initializer553c9->__invoke($valueHolder1066e, $this, '__isset', array('name' => $name), $this->initializer553c9) || 1) && $this->valueHolder1066e = $valueHolder1066e;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder1066e;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolder1066e;
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
        $this->initializer553c9 && ($this->initializer553c9->__invoke($valueHolder1066e, $this, '__unset', array('name' => $name), $this->initializer553c9) || 1) && $this->valueHolder1066e = $valueHolder1066e;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder1066e;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolder1066e;
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
        $this->initializer553c9 && ($this->initializer553c9->__invoke($valueHolder1066e, $this, '__clone', array(), $this->initializer553c9) || 1) && $this->valueHolder1066e = $valueHolder1066e;

        $this->valueHolder1066e = clone $this->valueHolder1066e;
    }

    public function __sleep()
    {
        $this->initializer553c9 && ($this->initializer553c9->__invoke($valueHolder1066e, $this, '__sleep', array(), $this->initializer553c9) || 1) && $this->valueHolder1066e = $valueHolder1066e;

        return array('valueHolder1066e');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializer553c9 = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializer553c9;
    }

    public function initializeProxy() : bool
    {
        return $this->initializer553c9 && ($this->initializer553c9->__invoke($valueHolder1066e, $this, 'initializeProxy', array(), $this->initializer553c9) || 1) && $this->valueHolder1066e = $valueHolder1066e;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolder1066e;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder1066e;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
