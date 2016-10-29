<?php

/*
 * Load the framework and components
 * */
require_once __DIR__ . '/../vendor/autoload.php';

/*
 * Initialize the Application
 * */
$app = new \Silex\Application();

/*
 * Require the application configuration
 * */
require_once __DIR__ . '/../app/bootstrap.php';

/*
 * Run the App.
 * */
$app['debug'] = true;
$app->run();