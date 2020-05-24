<?php
class   Bootstrap
{
    function __construct()
    {

        $url = isset($_GET['url']) ? $_GET['url'] : null;
        $url = rtrim($url, '/');                //to trim / if any
        $url = explode('/', $url);              // to get all the url parts

        if (empty($url[0])) {
            $url[0] = 'home';
            // require 'controllers/home.php';
            // $controller = new Home();
            // return false;
        }

        $file = 'controllers/' . $url[0] . '.php';
        if (file_exists($file)) {
            require $file;
        } else {
            require 'controllers/errors.php';
            $controller = new Errors();
            // $controller->controller404($file);
            // throw new Exception("The file " . $file . " doesn't exist!!");
            return false;
        }

        $controller = new $url[0];
        $controller->loadModel($url[0]);

        if (isset($url[1])) {
            if (isset($url[2])) {
                if (method_exists($contoller, $url[1])) {
                    $controller->{$url[1]}($url[2]);
                } else {
                    require 'controllers/errors.php';
                    $controller = new Errors();
                    // $controller->controller404($file);
                    // throw new Exception("The file " . $file . " doesn't exist!!");
                    return false;
                }
            } else
                $controller->{$url[1]}();
        }
    }
}
