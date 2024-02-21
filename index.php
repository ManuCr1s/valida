<?php
    require_once 'app/models/dbModel.php';
    require_once 'app/controllers/pagesController.php';
    define('VIEW_PATH',__DIR__.'/app/views');
    $uri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
    switch ($uri){
        case '/valida/':
            $controller = new pageControllers();
            $controller->home();
            break;
        default:
            http_response_code(404);
            echo 'Pagina no encontrada';
            echo $_SERVER['REQUEST_URI'];
            break;
    }