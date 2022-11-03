<?php
require_once('Controller/IController.php');
require_once('Controller/Controller.php');
require_once('Models/Movie.php');

class MovieController extends Controller implements IController
{
    protected $modelName = Movie::class;

    public function index()
    {
        $data = $this->model->all();
        if($this->auth) {
            require_once('Views/movie/admin/index.php');
        } else {
            require_once('Views/movie/index.php');
        }
    }

    public function show($id)
    {
        $data = $this->model->one($id);
        require_once('Views/movie/show.php');
    }

    public function edit($id = null)
    {
        $authors = $this->model->authors();
        if($id) {
            $data = $this->model->one($id);
            require_once('Views/movie/admin/update.php');
        } else {
            require_once('Views/movie/admin/create.php');
        }
    }

    public function store($id = null)
    {
        if($_POST) {
            $params = $_POST;
            $params['image'] = null;
            // @todo: image upload mittels $_FILES
            if($_FILES['image']['error'] == 0) {
                // bildname
                $imageName  = $_FILES['image']['name'];
                // uniq bild name
                $uniqName = uniqid() . '_' . $imageName;
                // interne temporäre upload datei
                $from       = $_FILES['image']['tmp_name'];
                // gewünschter speicherort
                $to = realpath(__DIR__ . '/..') . '/uploads/' . $uniqName;
                if(move_uploaded_file($from, $to)) {
                    // datei wurde erfolgreich hochgeladen
                    // db eintrag
                    $params['image'] = $uniqName;
                }
            }
            if($id) {
                // altes bild, falls vorhanden, löschen
                // oder über extra checkbox, vorhandenes bild löschen
                $dropImage = isset($_POST['drop_image']);
                $data = $this->model->one($id);
                Helper::dump($data);
                die();
                $this->model->update($params, $id);
            } else {
                $this->model->insert($params);
            }
        }
        return $this->index();
    }

    public function delete($id)
    {
        $data = $this->model->one($id);
        if($data['image']) {
            $uploadedFile = realpath(__DIR__ . '/..') . '/uploads/' . $data['image'];
            if(file_exists($uploadedFile)) {
                unlink($uploadedFile);
            }
        }
        // prüfen, ob bild vorhanden, wenn ja datei löschen
        // file_exists, unlink
        $this->model->delete($id);
        return $this->index();
    }

}
