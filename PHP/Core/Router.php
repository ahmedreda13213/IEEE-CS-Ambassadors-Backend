<?php

namespace Core;

class Router
{
    protected $routes = [];

    public function get($uri, $action)
    {
        $this->routes['GET'][$uri] = $action;
        return $this;
    }

    public function post($uri, $action)
    {
        $this->routes['POST'][$uri] = $action;
        return $this;
    }

    public function route($uri, $method)
    {
        if (isset($this->routes[$method][$uri])) {
            [$class, $function] = $this->routes[$method][$uri];
            (new $class)->$function();
        } else {
            http_response_code(404);
            echo "404 Not Found";
        }
    }
}
