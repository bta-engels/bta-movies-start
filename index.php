<?php
require_once 'inc/Helper.php';
require_once('inc/html_header.php');

Helper::dump($_GET);

// initialisiere variablen
// ID eines Datensatzes
$id         = null;
// name einer controller funktion
$action     = null;
// konstruktor eines controllers
$controller = null;


if ($_GET) {
    // @todo define controller
    // @todo define actions (controller methods) with ID or not
    //require_once('Controller/AuthorController.php');
    //$controller = new AuthorController;
    //$controller->index();

    if (isset($_GET['controller'])){
        switch ($_GET ['controller']){
            case 'authors':
                require_once('Controller/AuthorController.php');
                $controller = new AuthorController;
                break;

            default:

                break;
        }
    }    
//wenn controller nicht null und gibt es parameter $action und wenn ja (method exist) gibts ne funktion in .. dann index ausgeführt
    if ($controller && isset($_GET['action']) && method_exists($controller, $_GET ['action'])) {
        //$controller->index();
        $action = $_GET['action'];
        $controller->$action();
    }
} else {
    require_once('Views/home.php');
}

require_once('inc/html_footer.php');
?>
