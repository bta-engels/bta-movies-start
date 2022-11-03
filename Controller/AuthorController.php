<?php
require_once('Controller/IController.php');
require_once('Controller/Controller.php');
require_once('Models/Author.php');

class AuthorController extends Controller implements IController
{
    protected $modelName = Author::class;

    public function index()
    {
        // TODO: Implement index() method.
        $data = $this->model->all();
        if($this->auth) {
            require_once 'Views/author/admin/index.php';
        } else {
            require_once 'Views/author/index.php';
        }
    }

    public function show($id)
    {
        // TODO: Implement show() method.
        $data = $this->model->one($id);
        require_once 'Views/author/show.php'; 

    }

    public function edit($id = null)
    {
        if($id) {
            // id ist da, also update gemeint
            $data = $this->model->one($id);
            require_once 'Views/author/admin/update.php';
        } else {
            // keine id da, also neuen datenatz anlegen
            require_once 'Views/author/admin/create.php';
        }
    }

    public function store($id = null)
    {
        if($id) {
            $this->model->update($_POST, $id);
        } else {
            $this->model->insert($_POST);
        }
        return $this->index();
    }

    public function delete($id)
    {
        $this->model->delete($id);
        return $this->index();
    }
}
