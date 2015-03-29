<?php

namespace FW\Controller;

use Tools\Arr;

abstract class Controller
{
    private $_params = array();
    private $_options = array();
    protected $_twig;

    public function __construct()
    {

    }

    public function setParams($params)
    {
        $this->_params = $params;
    }

    protected function param($name)
    {
        return Arr::get($this->_params, $name);
    }

    protected function option($name)
    {
        return Arr::get($this->_options, $name);
    }

    public function action($actionName, $options = null)
    {
        $this->_options = $options;
        return $this->$actionName();
    }
}