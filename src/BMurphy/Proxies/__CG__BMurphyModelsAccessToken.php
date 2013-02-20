<?php

namespace BMurphy\Proxies\__CG__\BMurphy\Models;

/**
 * THIS CLASS WAS GENERATED BY THE DOCTRINE ORM. DO NOT EDIT THIS FILE.
 */
class AccessToken extends \BMurphy\Models\AccessToken implements \Doctrine\ORM\Proxy\Proxy
{
    private $_entityPersister;
    private $_identifier;
    public $__isInitialized__ = false;
    public function __construct($entityPersister, $identifier)
    {
        $this->_entityPersister = $entityPersister;
        $this->_identifier = $identifier;
    }
    /** @private */
    public function __load()
    {
        if (!$this->__isInitialized__ && $this->_entityPersister) {
            $this->__isInitialized__ = true;

            if (method_exists($this, "__wakeup")) {
                // call this after __isInitialized__to avoid infinite recursion
                // but before loading to emulate what ClassMetadata::newInstance()
                // provides.
                $this->__wakeup();
            }

            if ($this->_entityPersister->load($this->_identifier, $this) === null) {
                throw new \Doctrine\ORM\EntityNotFoundException();
            }
            unset($this->_entityPersister, $this->_identifier);
        }
    }

    /** @private */
    public function __isInitialized()
    {
        return $this->__isInitialized__;
    }

    
    public function setId($value)
    {
        $this->__load();
        return parent::setId($value);
    }

    public function getId()
    {
        if ($this->__isInitialized__ === false) {
            return (int) $this->_identifier["id"];
        }
        $this->__load();
        return parent::getId();
    }

    public function setClient_id($value)
    {
        $this->__load();
        return parent::setClient_id($value);
    }

    public function getClient_id()
    {
        $this->__load();
        return parent::getClient_id();
    }

    public function setUser_id($value)
    {
        $this->__load();
        return parent::setUser_id($value);
    }

    public function getUser_id()
    {
        $this->__load();
        return parent::getUser_id();
    }

    public function setToken($value)
    {
        $this->__load();
        return parent::setToken($value);
    }

    public function getToken()
    {
        $this->__load();
        return parent::getToken();
    }

    public function setLifetime($value)
    {
        $this->__load();
        return parent::setLifetime($value);
    }

    public function getLifetime()
    {
        $this->__load();
        return parent::getLifetime();
    }

    public function setRefresh_token($value)
    {
        $this->__load();
        return parent::setRefresh_token($value);
    }

    public function getRefresh_token()
    {
        $this->__load();
        return parent::getRefresh_token();
    }

    public function setValid($value)
    {
        $this->__load();
        return parent::setValid($value);
    }

    public function getValid()
    {
        $this->__load();
        return parent::getValid();
    }

    public function setCreated($value)
    {
        $this->__load();
        return parent::setCreated($value);
    }

    public function getCreated()
    {
        $this->__load();
        return parent::getCreated();
    }

    public function setUpdated($value)
    {
        $this->__load();
        return parent::setUpdated($value);
    }

    public function getUpdated()
    {
        $this->__load();
        return parent::getUpdated();
    }

    public function setClient($value)
    {
        $this->__load();
        return parent::setClient($value);
    }

    public function getClient()
    {
        $this->__load();
        return parent::getClient();
    }

    public function setUser($value)
    {
        $this->__load();
        return parent::setUser($value);
    }

    public function getUser()
    {
        $this->__load();
        return parent::getUser();
    }

    public function set($name, $value)
    {
        $this->__load();
        return parent::set($name, $value);
    }

    public function get($name)
    {
        $this->__load();
        return parent::get($name);
    }

    public function fromArray($array)
    {
        $this->__load();
        return parent::fromArray($array);
    }

    public function toArray($withAssociations = true)
    {
        $this->__load();
        return parent::toArray($withAssociations);
    }

    public function offsetExists($name)
    {
        $this->__load();
        return parent::offsetExists($name);
    }

    public function offsetSet($name, $value)
    {
        $this->__load();
        return parent::offsetSet($name, $value);
    }

    public function offsetGet($name)
    {
        $this->__load();
        return parent::offsetGet($name);
    }

    public function offsetUnset($name)
    {
        $this->__load();
        return parent::offsetUnset($name);
    }

    public function checkEntityManagerIsClear()
    {
        $this->__load();
        return parent::checkEntityManagerIsClear();
    }

    public function isNew()
    {
        $this->__load();
        return parent::isNew();
    }

    public function checkIsNew()
    {
        $this->__load();
        return parent::checkIsNew();
    }

    public function checkIsNotNew()
    {
        $this->__load();
        return parent::checkIsNotNew();
    }

    public function isModified()
    {
        $this->__load();
        return parent::isModified();
    }

    public function checkIsModified()
    {
        $this->__load();
        return parent::checkIsModified();
    }

    public function checkIsNotModified()
    {
        $this->__load();
        return parent::checkIsNotModified();
    }

    public function getModified()
    {
        $this->__load();
        return parent::getModified();
    }

    public function refresh()
    {
        $this->__load();
        return parent::refresh();
    }

    public function changeSet()
    {
        $this->__load();
        return parent::changeSet();
    }

    public function save()
    {
        $this->__load();
        return parent::save();
    }

    public function delete()
    {
        $this->__load();
        return parent::delete();
    }

    public function updateTimestampableCreated()
    {
        $this->__load();
        return parent::updateTimestampableCreated();
    }

    public function updateTimestampableUpdated()
    {
        $this->__load();
        return parent::updateTimestampableUpdated();
    }


    public function __sleep()
    {
        return array('__isInitialized__', 'id', 'client_id', 'user_id', 'token', 'lifetime', 'refresh_token', 'valid', 'created', 'updated', 'client', 'user');
    }

    public function __clone()
    {
        if (!$this->__isInitialized__ && $this->_entityPersister) {
            $this->__isInitialized__ = true;
            $class = $this->_entityPersister->getClassMetadata();
            $original = $this->_entityPersister->load($this->_identifier);
            if ($original === null) {
                throw new \Doctrine\ORM\EntityNotFoundException();
            }
            foreach ($class->reflFields as $field => $reflProperty) {
                $reflProperty->setValue($this, $reflProperty->getValue($original));
            }
            unset($this->_entityPersister, $this->_identifier);
        }
        
    }
}