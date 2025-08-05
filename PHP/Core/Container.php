<?php

namespace Core;

class Container {
      protected static $instance;

    public static function getInstance()
    {
        return static::$instance;
    }

    public static function setInstance($container)
    {
        static::$instance = $container;
    }
    protected $bindings = [];

    public function bind($key, $resolver)
    {
        $this->bindings[$key] = $resolver;
    }

    public function resolve($key)
    {
        if (!array_key_exists($key, $this->bindings)) {
            throw new \Exception("No binding found for key: $key");
        }

        $resolver = $this->bindings[$key];
        return call_user_func($resolver);
    }
}
