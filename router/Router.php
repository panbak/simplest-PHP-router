<?php


class Router {
    
    public $routes;

    public function __construct() {
        $this->routes = [];
    }

    public function get($url, $function) {
        $url = trim($url, '/');
        $this->routes[$url] = $function;

        return true;
    }

    public function run($url){
        $url = trim($url, '/');

        if (!isset($this->routes[$url])) {
            global $_404;
            require $_404;
            return;
        }

        $callback = $this->routes[$url];
        echo call_user_func($callback);
    }
}