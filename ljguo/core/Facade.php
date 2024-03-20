<?php

namespace ljguo\core;

abstract class Facade {
    abstract static function getFacadeClass():string;

    public static function __callStatic($name, $arguments)
    {
        $className = static::getFacadeClass();
        $class = new \ReflectionClass($className);
        $method = $class->getMethod($name);
        $instance = $class->newInstance(); // 实例化类对象
        $method->invokeArgs($instance, $arguments);
    }
}