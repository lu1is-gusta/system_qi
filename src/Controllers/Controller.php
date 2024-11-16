<?php

namespace src\Controllers;

use League\Plates\Engine;

abstract class Controller {

    public static function view(string $view, array $data = []) {
        $pathView = self::getPathView();
        $templates = new Engine($pathView);
        
        echo $templates->render($view, $data);
    }

    private static function getPathView(){
        return dirname(__FILE__, 2) ."/view";
    }
}