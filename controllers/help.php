<?php

class Help extends Controller
{
    function __construct()
    {
        parent::__construct();
        echo "We are in help <br>";
    }

    function other($arg = false)
    {
        echo 'HELP <br>' . $arg;

        require 'models/help_model.php';
        new Help_Model();
    }
}
