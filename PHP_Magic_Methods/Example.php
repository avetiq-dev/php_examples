<?php

class Example
{
    /**
     * @param $tag
     * The method is invoked automatically when an object is created and the
     */
    public function __construct()
    {

    }

    /**
     * The method is triggered when invoking an inaccessible instance method
     */
    public function __call()
    {

    }

    /**
     * The method is triggered when invoking an inaccessible static method
     */
    public static function __callStatic()
    {

    }

    /**
     * The method is invoked when reading the value from a non-existing or inaccessible property
     */
    public function __get()
    {

    }

    /**
     * The method is invoked when reading the value from a non-existing or inaccessible property
     */
    public function  __set()
    {

    }

    /**
     * The method is triggered by calling isset() or empty() on a non-existing or inaccessible property
     */
    public function  __isset()
    {

    }

    /**
     * The method is invoked when unset() is used on a non-existing or inaccessible property
     */
    public function  __unset()
    {

    }

    /**
     * The __sleep() commits the pending data
     */
    public function  __sleep()
    {

    }

    /**
     * The method is invoked when the unserialize() runs to reconstruct any resource that an object may have
     */
    public function  __wakeup()
    {

    }

    /**
     * To serialize() calls __serialize(), if available,
     * and construct and return an associative array of key/value pairs
     * that represent the serialized form of the object
     */
    public function  __serialize()
    {

    }

    /**
     * The unserialize() calls __unserialize(), if avaialble,
     * and restore the properties of the object from
     * the array returned by the __unserialize() method.
     */
    public function  __unserialize()
    {

    }

    /**
     * The method is invoked when an object of a class is treated as a string
     */
    public function  __toString()
    {
       return 'string';
    }

    /**
     * The method is invoked when an object is called as a function
     */
    public function  __invoke()
    {

    }

    /**
     * The method is called for a class exported by var_export()
     */
    public function  __set_state()
    {

    }

    /**
     * The method is called once the cloning is complete
     */
    public function  __clone()
    {

    }

    /**
     * The method is called by var_dump() when dumping an object to get the properties that should be shown
     */
    public function  __debugInfo()
    {

    }

    /**
     * The method is called when the object is deleted
     */
    public function  __destruct()
    {

    }
}