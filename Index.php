<?php
require_once "app/config/Routes.php";

$route = $_GET['route'] ?? 'inicio';

switch ($route) {

    case 'inicio':
        require_once "app/controllers/HomeController.php";
        $controller = new HomeController();
        $controller->showHome();
        break;

    case 'tienda':
        require_once "app/controllers/TiendaController.php";
        $controller = new TiendaController();
        $controller->showStore();
        break;

    case 'blog':
        require_once "app/controllers/BlogController.php";
        $controller = new BlogController();
        $controller->showBlog();
        break;

    case 'politicas':
        require_once "app/controllers/PoliticasController.php";
        $controller = new PoliticasController();
        $controller->showPolicies();
        break;

    default:
        require_once "app/views/404.php";
        break;
}
