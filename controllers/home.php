<!-- controller/home -->
<?php
class Home extends Controller
{
    function __construct()
    {
        parent::__construct();

        echo $this->css;
    }

    function index()
    {
        $this->view->title = "Scratch | Home";
        array_push($this->view->css, 'style');

        $this->view->render('partials/header');
        $this->view->render('home');
        $this->view->render('partials/footer');
    }
}
