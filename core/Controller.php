<?php
namespace Core;

class Controller{
    private $controllerName, $actionName;
    public $view, $request;

    public function __construct($controller, $action){
        $this->controllerName = $controller;
        $this->actionName = $action;

    }
}