<?php
session_start();
if (isset($_SESSION['auth'])){
    $auth = $_SESSION['auth'];
} else {
    $auth = null;
}

require_once 'inc/Helper.php';
require_once('inc/html_header.php');

//Helper::dump($_GET);

// initialisiere variablen
// ID eines Datensatzes
$id = null;
// name einer controller funktion
$action = null;
// konstruktor eines controllers
$controller = null;

if ($_GET) {
    // @todo define controller
    // @todo define actions (controller methods) with ID or not

    if (isset($_GET['controller'])) {
        switch ($_GET['controller']) {
            case 'authors':
                require_once('Controller/AuthorController.php');
                $controller = new AuthorController;
                break;
            case 'user':
                require_once('Controller/UserController.php');
                $controller = new UserController;
                break;
            default:
                echo "Nichts gegeben";
                break;
        }

        if ($controller && isset($_GET['action']) && method_exists($controller, $_GET['action'])) {
            $action = $_GET['action'];
            // @todo: existiert ein parameter für id? wenn ja der controller-funtioon als parameter übergeben
            if (isset($_GET['id'])) {
                $id = $_GET['id'];
                $controller->$action($id);
            } else {
                $controller->$action();
            }
        }
    }
} else {
    require_once('Views/home.php');
}
require_once('inc/html_footer.php');
?>
