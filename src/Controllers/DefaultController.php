<?php
/**
 * Created by PhpStorm.
 * User: phlisg
 * Date: 28/10/16
 * Time: 22:39
 */

namespace Controllers;

use Silex\Application;

class DefaultController
{
    public function defaultView(Application $app)
    {
        $composer = json_decode(file_get_contents(__DIR__ . '/../../composer.json'), true);

        return $app['twig']->render('default/default.html.twig', [
            'composer' => $composer,
        ]);
    }
}