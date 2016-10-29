<?php

/*
 * Load the core
 * */
require __DIR__ . '/Core/Services.php';
require __DIR__ . '/Core/Config.php';

/*
 * Load controllers
 * */
require __DIR__ . '/../src/Controllers/DefaultController.php';

/*
 * Load the routes
 * Must be loaded after the controllers to avoid
 * unfound controllers errors.
 * */
require __DIR__ . '/Core/Routes.php';