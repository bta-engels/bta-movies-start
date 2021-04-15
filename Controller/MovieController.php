<?php
require_once 'Controller.php';
require_once 'Models/Movie.php';
require_once 'Models/Author.php';
class MovieController extends Controller {

    private $authorModel;

    public function __construct() {
        $this->model = new Movie();
        $this->authorModel = new Author();
        parent::__construct();
    }

    public function index() {
        $list = $this->model->all();
        if ($this->auth) {
            require_once 'Views/movie/admin/index.php';
        } else {
            require_once 'Views/movie/index.php';
        }
    }

    public function show(int $id) {
        $item = $this->model->find($id);
        $item['author'] = $this->authorModel->find($item['author_id']);
        require_once 'Views/movie/show.php';
    }

        // zeige formular zum editiern oder neu anlegen eines datensatzes an
    public function edit($id = null) {

        if(!$this->auth) {
            header('location: /movies');
        }
        $authors = $this->authorModel->all();

        if($id) {
            $data = $this->model->find($id);
        }

        require_once 'Views/Forms/movie.php';
    }

    public function store($id = null) {
        if (!$this->auth) {
            header('location: /movies');
        }

        $params = null;
        $error = null;

        if(isset($_POST['title']) && '' !== $_POST['title'] && isset($_POST['price']) && '' !== $_POST['price']) {
            $params = $_POST;
            $params['image'] = null;
        }

        if( UPLOAD_ERR_OK == $_FILES['image']['error']) {
            $image = $_FILES['image']['name'];
            $destination = __DIR__ . '/../uploads/' . $image;
            // todo: upload per move_uploaded_file
            if(move_uploaded_file($_FILES['image']['tmp_name'], $destination)) {
                $params['image'] = $image;
            }
        }

        if($params) {
            if ($id) {
                $this->model->update($params, $id);
            } else {
                $this->model->insert($params);
            }
        }
        header('location: /movies');
    }

    public function delete($id) {
        if($this->auth) {
            $this->model->delete($id);
        }
        header('location: /movies');
    }
}
