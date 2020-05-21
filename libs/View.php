<?php

class View
{
    public $msg = 'Nothing here!!';        
    function __construct()
    {
        echo 'This is a veiw <br>';
        // public $msg = 'Nothing here!!';        
    }

    public function render($name)
    {
        require 'views/' . $name . '.php';
    }
}
