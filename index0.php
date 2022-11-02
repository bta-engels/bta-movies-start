<?php
require_once 'inc/Helper.php';
require_once('inc/html_header.php');

// initialisiere variablen
// ID eines Datensatzes
$id = null;
// name einer controller funktion
$action = null;
// konstruktor eines controllers
$controller = null;

// $_GET auswerten

/* 
require_once 'Models/Movie.php';
$movies = new Movie();
$data = $movies->all();
Helper::dump($data);
 */

if(isset($_GET['controller'])) {
//    $controller = $_GET['controller'];
    switch($controller) {
        case 'movies': require_once 'Controller/MovieController.php';
        $controller = new MovieController();
        break;
        case 'authors': require_once 'Controller/AuthorController.php';
        $controller = new AuthorController();
        break;
    }

    /**
     * @todo action prüfen
     * - ist $controller nicht null
     * - GET param 'action' prüfen, ob existiert
     * - hat die controller-klasse eine funktion, die dem action-parameter entspricht 
    */
    if  (null != $controller && isset($_GET['action']) && method_exists($controller, $_GET['action'])) {
        $action = $_GET['action'];

        // @todo prüfe, ob eine id existiert
        if(isset($_GET['id'])) {
            $id = (int) $_GET['id'];
            $controller->$action($id);
        }
        else {
            $controller->$action();
        }
        
    }

    Helper::dump($_GET);
}
else {
    require_once('Views/home.php');
}


require_once('inc/html_footer.php');
?>
