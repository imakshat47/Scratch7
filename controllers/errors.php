<?php

class Errors extends Controller
{
    function __construct()
    {
        parent::__construct();
        echo 'This is an error';
        $this->view->msg = "This page dosen't exists!";
        $this->view->render('/errors/index');
    }
    // function controller404($file_name = false)
    // {
    //     echo 'No file ' . $file_name . ' exists!!';
    // }
}
