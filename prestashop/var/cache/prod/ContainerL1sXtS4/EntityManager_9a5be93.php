<?php

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    private $valueHolderc5353 = null;
    private $initializerb893c = null;
    private static $publicProperties96021 = [
        
    ];
    public function getConnection()
    {
        $this->initializerb893c && ($this->initializerb893c->__invoke($valueHolderc5353, $this, 'getConnection', array(), $this->initializerb893c) || 1) && $this->valueHolderc5353 = $valueHolderc5353;
        return $this->valueHolderc5353->getConnection();
    }
    public function getMetadataFactory()
    {
        $this->initializerb893c && ($this->initializerb893c->__invoke($valueHolderc5353, $this, 'getMetadataFactory', array(), $this->initializerb893c) || 1) && $this->valueHolderc5353 = $valueHolderc5353;
        return $this->valueHolderc5353->getMetadataFactory();
    }
    public function getExpressionBuilder()
    {
        $this->initializerb893c && ($this->initializerb893c->__invoke($valueHolderc5353, $this, 'getExpressionBuilder', array(), $this->initializerb893c) || 1) && $this->valueHolderc5353 = $valueHolderc5353;
        return $this->valueHolderc5353->getExpressionBuilder();
    }
    public function beginTransaction()
    {
        $this->initializerb893c && ($this->initializerb893c->__invoke($valueHolderc5353, $this, 'beginTransaction', array(), $this->initializerb893c) || 1) && $this->valueHolderc5353 = $valueHolderc5353;
        return $this->valueHolderc5353->beginTransaction();
    }
    public function getCache()
    {
        $this->initializerb893c && ($this->initializerb893c->__invoke($valueHolderc5353, $this, 'getCache', array(), $this->initializerb893c) || 1) && $this->valueHolderc5353 = $valueHolderc5353;
        return $this->valueHolderc5353->getCache();
    }
    public function transactional($func)
    {
        $this->initializerb893c && ($this->initializerb893c->__invoke($valueHolderc5353, $this, 'transactional', array('func' => $func), $this->initializerb893c) || 1) && $this->valueHolderc5353 = $valueHolderc5353;
        return $this->valueHolderc5353->transactional($func);
    }
    public function wrapInTransaction(callable $func)
    {
        $this->initializerb893c && ($this->initializerb893c->__invoke($valueHolderc5353, $this, 'wrapInTransaction', array('func' => $func), $this->initializerb893c) || 1) && $this->valueHolderc5353 = $valueHolderc5353;
        return $this->valueHolderc5353->wrapInTransaction($func);
    }
    public function commit()
    {
        $this->initializerb893c && ($this->initializerb893c->__invoke($valueHolderc5353, $this, 'commit', array(), $this->initializerb893c) || 1) && $this->valueHolderc5353 = $valueHolderc5353;
        return $this->valueHolderc5353->commit();
    }
    public function rollback()
    {
        $this->initializerb893c && ($this->initializerb893c->__invoke($valueHolderc5353, $this, 'rollback', array(), $this->initializerb893c) || 1) && $this->valueHolderc5353 = $valueHolderc5353;
        return $this->valueHolderc5353->rollback();
    }
    public function getClassMetadata($className)
    {
        $this->initializerb893c && ($this->initializerb893c->__invoke($valueHolderc5353, $this, 'getClassMetadata', array('className' => $className), $this->initializerb893c) || 1) && $this->valueHolderc5353 = $valueHolderc5353;
        return $this->valueHolderc5353->getClassMetadata($className);
    }
    public function createQuery($dql = '')
    {
        $this->initializerb893c && ($this->initializerb893c->__invoke($valueHolderc5353, $this, 'createQuery', array('dql' => $dql), $this->initializerb893c) || 1) && $this->valueHolderc5353 = $valueHolderc5353;
        return $this->valueHolderc5353->createQuery($dql);
    }
    public function createNamedQuery($name)
    {
        $this->initializerb893c && ($this->initializerb893c->__invoke($valueHolderc5353, $this, 'createNamedQuery', array('name' => $name), $this->initializerb893c) || 1) && $this->valueHolderc5353 = $valueHolderc5353;
        return $this->valueHolderc5353->createNamedQuery($name);
    }
    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializerb893c && ($this->initializerb893c->__invoke($valueHolderc5353, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializerb893c) || 1) && $this->valueHolderc5353 = $valueHolderc5353;
        return $this->valueHolderc5353->createNativeQuery($sql, $rsm);
    }
    public function createNamedNativeQuery($name)
    {
        $this->initializerb893c && ($this->initializerb893c->__invoke($valueHolderc5353, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializerb893c) || 1) && $this->valueHolderc5353 = $valueHolderc5353;
        return $this->valueHolderc5353->createNamedNativeQuery($name);
    }
    public function createQueryBuilder()
    {
        $this->initializerb893c && ($this->initializerb893c->__invoke($valueHolderc5353, $this, 'createQueryBuilder', array(), $this->initializerb893c) || 1) && $this->valueHolderc5353 = $valueHolderc5353;
        return $this->valueHolderc5353->createQueryBuilder();
    }
    public function flush($entity = null)
    {
        $this->initializerb893c && ($this->initializerb893c->__invoke($valueHolderc5353, $this, 'flush', array('entity' => $entity), $this->initializerb893c) || 1) && $this->valueHolderc5353 = $valueHolderc5353;
        return $this->valueHolderc5353->flush($entity);
    }
    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializerb893c && ($this->initializerb893c->__invoke($valueHolderc5353, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializerb893c) || 1) && $this->valueHolderc5353 = $valueHolderc5353;
        return $this->valueHolderc5353->find($className, $id, $lockMode, $lockVersion);
    }
    public function getReference($entityName, $id)
    {
        $this->initializerb893c && ($this->initializerb893c->__invoke($valueHolderc5353, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializerb893c) || 1) && $this->valueHolderc5353 = $valueHolderc5353;
        return $this->valueHolderc5353->getReference($entityName, $id);
    }
    public function getPartialReference($entityName, $identifier)
    {
        $this->initializerb893c && ($this->initializerb893c->__invoke($valueHolderc5353, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializerb893c) || 1) && $this->valueHolderc5353 = $valueHolderc5353;
        return $this->valueHolderc5353->getPartialReference($entityName, $identifier);
    }
    public function clear($entityName = null)
    {
        $this->initializerb893c && ($this->initializerb893c->__invoke($valueHolderc5353, $this, 'clear', array('entityName' => $entityName), $this->initializerb893c) || 1) && $this->valueHolderc5353 = $valueHolderc5353;
        return $this->valueHolderc5353->clear($entityName);
    }
    public function close()
    {
        $this->initializerb893c && ($this->initializerb893c->__invoke($valueHolderc5353, $this, 'close', array(), $this->initializerb893c) || 1) && $this->valueHolderc5353 = $valueHolderc5353;
        return $this->valueHolderc5353->close();
    }
    public function persist($entity)
    {
        $this->initializerb893c && ($this->initializerb893c->__invoke($valueHolderc5353, $this, 'persist', array('entity' => $entity), $this->initializerb893c) || 1) && $this->valueHolderc5353 = $valueHolderc5353;
        return $this->valueHolderc5353->persist($entity);
    }
    public function remove($entity)
    {
        $this->initializerb893c && ($this->initializerb893c->__invoke($valueHolderc5353, $this, 'remove', array('entity' => $entity), $this->initializerb893c) || 1) && $this->valueHolderc5353 = $valueHolderc5353;
        return $this->valueHolderc5353->remove($entity);
    }
    public function refresh($entity)
    {
        $this->initializerb893c && ($this->initializerb893c->__invoke($valueHolderc5353, $this, 'refresh', array('entity' => $entity), $this->initializerb893c) || 1) && $this->valueHolderc5353 = $valueHolderc5353;
        return $this->valueHolderc5353->refresh($entity);
    }
    public function detach($entity)
    {
        $this->initializerb893c && ($this->initializerb893c->__invoke($valueHolderc5353, $this, 'detach', array('entity' => $entity), $this->initializerb893c) || 1) && $this->valueHolderc5353 = $valueHolderc5353;
        return $this->valueHolderc5353->detach($entity);
    }
    public function merge($entity)
    {
        $this->initializerb893c && ($this->initializerb893c->__invoke($valueHolderc5353, $this, 'merge', array('entity' => $entity), $this->initializerb893c) || 1) && $this->valueHolderc5353 = $valueHolderc5353;
        return $this->valueHolderc5353->merge($entity);
    }
    public function copy($entity, $deep = false)
    {
        $this->initializerb893c && ($this->initializerb893c->__invoke($valueHolderc5353, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializerb893c) || 1) && $this->valueHolderc5353 = $valueHolderc5353;
        return $this->valueHolderc5353->copy($entity, $deep);
    }
    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializerb893c && ($this->initializerb893c->__invoke($valueHolderc5353, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializerb893c) || 1) && $this->valueHolderc5353 = $valueHolderc5353;
        return $this->valueHolderc5353->lock($entity, $lockMode, $lockVersion);
    }
    public function getRepository($entityName)
    {
        $this->initializerb893c && ($this->initializerb893c->__invoke($valueHolderc5353, $this, 'getRepository', array('entityName' => $entityName), $this->initializerb893c) || 1) && $this->valueHolderc5353 = $valueHolderc5353;
        return $this->valueHolderc5353->getRepository($entityName);
    }
    public function contains($entity)
    {
        $this->initializerb893c && ($this->initializerb893c->__invoke($valueHolderc5353, $this, 'contains', array('entity' => $entity), $this->initializerb893c) || 1) && $this->valueHolderc5353 = $valueHolderc5353;
        return $this->valueHolderc5353->contains($entity);
    }
    public function getEventManager()
    {
        $this->initializerb893c && ($this->initializerb893c->__invoke($valueHolderc5353, $this, 'getEventManager', array(), $this->initializerb893c) || 1) && $this->valueHolderc5353 = $valueHolderc5353;
        return $this->valueHolderc5353->getEventManager();
    }
    public function getConfiguration()
    {
        $this->initializerb893c && ($this->initializerb893c->__invoke($valueHolderc5353, $this, 'getConfiguration', array(), $this->initializerb893c) || 1) && $this->valueHolderc5353 = $valueHolderc5353;
        return $this->valueHolderc5353->getConfiguration();
    }
    public function isOpen()
    {
        $this->initializerb893c && ($this->initializerb893c->__invoke($valueHolderc5353, $this, 'isOpen', array(), $this->initializerb893c) || 1) && $this->valueHolderc5353 = $valueHolderc5353;
        return $this->valueHolderc5353->isOpen();
    }
    public function getUnitOfWork()
    {
        $this->initializerb893c && ($this->initializerb893c->__invoke($valueHolderc5353, $this, 'getUnitOfWork', array(), $this->initializerb893c) || 1) && $this->valueHolderc5353 = $valueHolderc5353;
        return $this->valueHolderc5353->getUnitOfWork();
    }
    public function getHydrator($hydrationMode)
    {
        $this->initializerb893c && ($this->initializerb893c->__invoke($valueHolderc5353, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializerb893c) || 1) && $this->valueHolderc5353 = $valueHolderc5353;
        return $this->valueHolderc5353->getHydrator($hydrationMode);
    }
    public function newHydrator($hydrationMode)
    {
        $this->initializerb893c && ($this->initializerb893c->__invoke($valueHolderc5353, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializerb893c) || 1) && $this->valueHolderc5353 = $valueHolderc5353;
        return $this->valueHolderc5353->newHydrator($hydrationMode);
    }
    public function getProxyFactory()
    {
        $this->initializerb893c && ($this->initializerb893c->__invoke($valueHolderc5353, $this, 'getProxyFactory', array(), $this->initializerb893c) || 1) && $this->valueHolderc5353 = $valueHolderc5353;
        return $this->valueHolderc5353->getProxyFactory();
    }
    public function initializeObject($obj)
    {
        $this->initializerb893c && ($this->initializerb893c->__invoke($valueHolderc5353, $this, 'initializeObject', array('obj' => $obj), $this->initializerb893c) || 1) && $this->valueHolderc5353 = $valueHolderc5353;
        return $this->valueHolderc5353->initializeObject($obj);
    }
    public function getFilters()
    {
        $this->initializerb893c && ($this->initializerb893c->__invoke($valueHolderc5353, $this, 'getFilters', array(), $this->initializerb893c) || 1) && $this->valueHolderc5353 = $valueHolderc5353;
        return $this->valueHolderc5353->getFilters();
    }
    public function isFiltersStateClean()
    {
        $this->initializerb893c && ($this->initializerb893c->__invoke($valueHolderc5353, $this, 'isFiltersStateClean', array(), $this->initializerb893c) || 1) && $this->valueHolderc5353 = $valueHolderc5353;
        return $this->valueHolderc5353->isFiltersStateClean();
    }
    public function hasFilters()
    {
        $this->initializerb893c && ($this->initializerb893c->__invoke($valueHolderc5353, $this, 'hasFilters', array(), $this->initializerb893c) || 1) && $this->valueHolderc5353 = $valueHolderc5353;
        return $this->valueHolderc5353->hasFilters();
    }
    public static function staticProxyConstructor($initializer)
    {
        static $reflection;
        $reflection = $reflection ?? new \ReflectionClass(__CLASS__);
        $instance   = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $instance, 'Doctrine\\ORM\\EntityManager')->__invoke($instance);
        $instance->initializerb893c = $initializer;
        return $instance;
    }
    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;
        if (! $this->valueHolderc5353) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolderc5353 = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
        }
        $this->valueHolderc5353->__construct($conn, $config, $eventManager);
    }
    public function & __get($name)
    {
        $this->initializerb893c && ($this->initializerb893c->__invoke($valueHolderc5353, $this, '__get', ['name' => $name], $this->initializerb893c) || 1) && $this->valueHolderc5353 = $valueHolderc5353;
        if (isset(self::$publicProperties96021[$name])) {
            return $this->valueHolderc5353->$name;
        }
        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderc5353;
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
        $targetObject = $this->valueHolderc5353;
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
        $this->initializerb893c && ($this->initializerb893c->__invoke($valueHolderc5353, $this, '__set', array('name' => $name, 'value' => $value), $this->initializerb893c) || 1) && $this->valueHolderc5353 = $valueHolderc5353;
        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderc5353;
            $targetObject->$name = $value;
            return $targetObject->$name;
        }
        $targetObject = $this->valueHolderc5353;
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
        $this->initializerb893c && ($this->initializerb893c->__invoke($valueHolderc5353, $this, '__isset', array('name' => $name), $this->initializerb893c) || 1) && $this->valueHolderc5353 = $valueHolderc5353;
        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderc5353;
            return isset($targetObject->$name);
        }
        $targetObject = $this->valueHolderc5353;
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
        $this->initializerb893c && ($this->initializerb893c->__invoke($valueHolderc5353, $this, '__unset', array('name' => $name), $this->initializerb893c) || 1) && $this->valueHolderc5353 = $valueHolderc5353;
        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderc5353;
            unset($targetObject->$name);
            return;
        }
        $targetObject = $this->valueHolderc5353;
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
        $this->initializerb893c && ($this->initializerb893c->__invoke($valueHolderc5353, $this, '__clone', array(), $this->initializerb893c) || 1) && $this->valueHolderc5353 = $valueHolderc5353;
        $this->valueHolderc5353 = clone $this->valueHolderc5353;
    }
    public function __sleep()
    {
        $this->initializerb893c && ($this->initializerb893c->__invoke($valueHolderc5353, $this, '__sleep', array(), $this->initializerb893c) || 1) && $this->valueHolderc5353 = $valueHolderc5353;
        return array('valueHolderc5353');
    }
    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }
    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializerb893c = $initializer;
    }
    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializerb893c;
    }
    public function initializeProxy() : bool
    {
        return $this->initializerb893c && ($this->initializerb893c->__invoke($valueHolderc5353, $this, 'initializeProxy', array(), $this->initializerb893c) || 1) && $this->valueHolderc5353 = $valueHolderc5353;
    }
    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolderc5353;
    }
    public function getWrappedValueHolderValue()
    {
        return $this->valueHolderc5353;
    }
}
