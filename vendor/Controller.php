<?php
namespace vendor;

abstract class Controller
{
    public $route = [];
    public $layout;
    public $view;
    public $vars = [];

    public function __construct($route)
    {
        $this->route = $route;
        $this->view = $route['action'];
    }

    public function getView()
    {
        $obj = new View($this->route, $this->layout, $this->view);
        $obj->render($this->vars);
    }

    public function set($vars)
    {
        $this->vars = $vars;
    }

}