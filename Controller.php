<?php

namespace Controller;

abstract class Controller
{
    private $_params;

    public function __construct()
    {

    }

    public function setParams($params)
    {
        $this->_params = $params;
    }

    public function param($name)
    {
        if (!isset($this->_params[$name])) {
            return null;
        }
        return $this->_params[$name];
    }

    public function action($actionName)
    {
        return $this->$actionName();
    }
}