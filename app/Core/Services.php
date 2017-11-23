<?php

/*
 * Load all the Dependencies your Silex App needs.
 * */
use Silex\Provider;

/*
 * Twig: views are located in src/views
 * */
$app->register(new Provider\TwigServiceProvider(), [
    'twig.path' => __DIR__ . '/../../src/Views',
]);

$app->register(new Silex\Provider\AssetServiceProvider(), [
    'assets.version'        => 'v1',
]);

/*
 * Twig web Profiler
 * */
$app->register(new Provider\HttpFragmentServiceProvider());
$app->register(new Provider\ServiceControllerServiceProvider());
$app->register(new Provider\WebProfilerServiceProvider(), [
    'profiler.cache_dir'    => __DIR__ . '/../cache/profiler',
    'profiler.mount_prefix' => '/_profiler', // this is the default
]);