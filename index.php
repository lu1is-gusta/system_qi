<?php

require __DIR__ . '/vendor/autoload.php';
require __DIR__ . '/routes/web.php';

try {

    $uri = parse_url($_SERVER['REQUEST_URI'])['path'];
    $requestMethod = $_SERVER['REQUEST_METHOD'];

    if(!isset($router[$requestMethod])){
        throw new Exception('O método HTTP não existe');
    }

    if(!array_key_exists($uri, $router[$requestMethod])){
        throw new Exception('a rota não existe');
    }

    $router[$requestMethod][$uri];

} catch (Exception $e) {
    $e->getMessage();
}

// Subi o projeto com as dependências só pra ter uma ideia de como é. Recomendo que criem um arquivo ".gitignore" para por os dados sensíveis.