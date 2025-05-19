<?php
require '../autoload.php';

use app\controllers\HomeController;
use app\controllers\JobsController;
use app\controllers\LoginController;
use app\controllers\SignupController;
use app\controllers\ApplicationController;
use app\controllers\CompaniesController;

$url = isset($_GET['url']) ? $_GET['url'] : 'home';
$urlParts = explode('/', $url);

switch ($urlParts[0]) {
    case 'home':
        $controller = new HomeController();
        $controller->index();
        break;
    case 'jobs':
        $controller = new JobsController();
        $controller->index();
        break;
    case 'login':
        $controller = new LoginController();
        $controller->index();
        break;
    case 'signup':
        $controller = new SignupController();
        $controller->index();
        break;
    case 'application':
        $controller = new ApplicationController();
        $controller->index();
        break;
    case 'companies':
        $controller = new CompaniesController();
        $controller->index();
        break;
    default:
        header("HTTP/1.0 404 Not Found");
        echo "404 Not Found";
        break;
}