<!-- Index -->
<?php
// error_reporting('E_ALL');
// ini_set('display_errors', 1);

// use in autoloader
require 'libs/Bootstrap.php';
require 'libs/Controller.php';
require 'libs/Model.php';
require 'libs/View.php';

require 'config/paths.php';
require 'Config/database.php';
$app = new Bootstrap();
