<?php

class View
{
    public $msg = 'Nothing here!!';
    public $css = array();
    public $js = array();
    public $argv = array();
    function __construct()
    {
        $this->css = [
            'bootstrap/bootstrap.min',
            'font_awesome/all.min',
        ];
        $this->js = [
            'bootstrap/bootstrap.min',
            'font_awesome/all.min',
        ];
    }

    public function render($name, $argc = false)
    {
        if ($argc != false)
            foreach ($argc as $arg)
                $this->argv = $arg;
        require 'views/' . $name . '.php';
        
    }
}
