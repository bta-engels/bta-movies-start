<?php
// starte session
// include controllers
session_start();
require_once 'inc/Helper.php';
require_once 'Controller/AuthorController.php';
require_once 'Controller/UserController.php';

// non static call
// $helper = new Helper();
// $helper->dump($_GET);

//Helper::dump($_GET);
// $_GET - assoc. array für get-params
// initialisiere variablen
$id         = null;
// name einer controller funktion
$action     = null;
// konstruktor eines controllers
$controller = null;

// todo define controller
if( isset($_GET['controller']) ) {
    switch($_GET['controller']) {
        case 'authors':
            $controller = new AuthorController();
            break;
        case 'user':
            $controller = new UserController();
            break;
        default:
            echo "$_GET[controller] is invalid";
    }

    if (isset($_GET['action']) && $controller && method_exists($controller, $_GET['action'])) {
        $action = $_GET['action'];
        if(isset($_GET['id'])) {
            $id = $_GET['id'];
            $controller->$action($id);
        } else {
            $controller->$action();
        }
    }

} else {
    require_once 'Views/home.php';
}
?>
