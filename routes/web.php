<?php

function loadRoute(string $controller, string $action) {
    try {

        $namespaceController = "src\\Controllers\\{$controller}";
        
        if(!class_exists($namespaceController)) {
            throw new Exception("O controller {$controller} não foi encontrado");
        }

        $instanceController = new $namespaceController();

        if(!method_exists($instanceController, $action)) {
            throw new Exception("O método {$action} da classe {$controller} não foi encontrado");
        }

        $instanceController->$action((object)$_REQUEST);
    } catch (Exception $e){
        echo $e->getMessage();
    }

}

$router = [
    "GET" => [
        "/System_qi/index.php/" => fn () => loadRoute("HomeController", "index"),
        "/System_qi/index.php/users" =>  fn () => loadRoute("UsersController", "index"),
    ],

    "POST" => [
        // "/users/create" => loadRoute("UsersController", "create"),
        // "users/createTrabalhador"
    ]
];
