<?php

namespace App;

class Route {
    public $path;
    public $action;
    public $method;

    public function __construct($method, $path, $action){
        $this->method = $method;
        $this->path = $path;
        $this->action = $action;
    }

    public static function get($path, $action){
        Route::addRoute('GET' $path, $action);
    }

    public static function post($path, $action){
        Route::addRoute('POST' $path, $action);
    }
}