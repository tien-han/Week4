<?php
/**
 * @file 328/Week4/index.php
 * @description Simple MVC using the Fat-Free framework. This page holds the controller for the Week4 assignment.
 * @author Tien Han
 * @version 1.0
 */

    session_start();

    //Turn on error reporting
    ini_set('display_errors', 1);
    error_reporting(E_ALL);

    //Require the autoload file
    require_once('vendor/autoload.php');

    //Instantiate the F3 Base class (Fat-Free)
    $f3 = Base::instance();

    //Define a default route
    $f3->route('GET /', function() {
        //Render a view page
        $view = new Template();
        echo $view->render('views/info.html');
    });

    //Run Fat-Free
    $f3->run();
?>