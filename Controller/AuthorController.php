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
        // TODO: Implement edit() method.
        $data = $this->model->one($id);
        require_once 'Views/author/admin/update.php';
    }

    public function store($id = null)
    {
        // TODO: Implement store() method.
        //$firstname = $_POST['firstname'];
        //$lastname = $_POST['lastname'];
        $data = $this->model->one($id);
        require_once 'Views/author/admin/create.php';
    }

    public function delete($id)
    {
        // TODO: Implement delete() method
        $data = $this->model->one($id);
    }
}
