<?php

class Controller
{
    public $css;
    public $js;

    function __construct()
    {
        echo 'main controller';
        $this->view = new View();
        
    }

    public function loadModel($name = false)
    {
        $path = 'models/' . $name . '_model.php';

        if (file_exists($path)) {
            require $path;
            $model_name = $name . '_Model';
            $this->model = new $model_name();
        }
    }
}
