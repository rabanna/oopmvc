<?php
namespace Core;

use Core\View;
use Core\Config;
use Core\Request;

class Controller{
    private $controllerName, $actionName;
    public $view, $request;

    public function __construct($controller, $action){
        $this->controllerName = $controller;
        $this->actionName = $action;
        $viewPath = strtolower($controller) . '/' .$action;
        $this->view = new View($viewPath);
        $this->view->setLayout(Config::get('default_layout'));
        $this->request = new Request();
        $this->onController();

    }

    public function onController(){}
}