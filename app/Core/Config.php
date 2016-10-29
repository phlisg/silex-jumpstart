<?php

/*
 * Additional general config goes here.
 * */
namespace App\Core;

use RecursiveArrayIterator;
use RecursiveIteratorIterator;

class Config
{
    /**
     * Define App directories
     */
    private static $dirs = [
        'controllers' => [
            'default' => __DIR__ . '/../../src/Controllers/DefaultController.php',
        ],
        'web' => [
            'css' => __DIR__ . '/../../web/css/',
            'img' => __DIR__ . '/../../web/img/',
            'js' => __DIR__ . '/../../web/js/',
        ],
    ];

    /**
     * @param string $service : string to get desired path, accepts dot notation
     *
     * @return string
     */
    public static function dir($service)
    {
        // http://stackoverflow.com/questions/10424335/php-convert-multidimensional-array-to-2d-array-with-dot-notation-keys
        $ritit = new RecursiveIteratorIterator(new RecursiveArrayIterator(self::$dirs));

        $dirs = [];
        foreach ($ritit as $leafValue) {

            $keys = [];
            foreach (range(0, $ritit->getDepth()) as $depth) {
                $keys[] = $ritit->getSubIterator($depth)->key();
            }

            $dirs[join('.', $keys)] = $leafValue;
        }

        return $dirs[$service];
    }
}