<?php
require_once('Controller/IController.php');
require_once('Controller/Controller.php');

class MovieController extends Controller implements IController
{
    protected $model = Movie::class;
    protected $authors;

    public function __construct()
    {
        parent::__construct();
        $model = new Author;
        $this->authors = $model->all();
    }

    public function index()
    {
        $data = $this->model->all();

        if ($this->auth) {
            require_once('Views/movie/admin/index.php');
        } else {
            require_once('Views/movie/index.php');
        }
    }

    public function show($id)
    {
        $data = $this->model->find($id);
        require_once('Views/movie/show.php');
    }

    public function edit($id = null)
    {
        $authors = $this->authors;
        if ($id > 0) {
            $data = $this->model->find($id);
            require_once('Views/movie/admin/update.php');
        } else {
            require_once('Views/movie/admin/create.php');
        }
    }

    public function store($id = null)
    {
        if ($_POST) {
            //Normalerweise kommt hier validierung
            $params = $_POST;
//            Helper::dump($_FILES);
            // file upload via PHP $_FILES var
            if(isset($_FILES['image']) && 0 === $_FILES['image']['error']) {
                $image  = $_FILES['image']['name'];
                $source = $_FILES['image']['tmp_name'];
                $path   = realpath(__DIR__.'/../uploads');
                $destination = "$path/$image";
                if(move_uploaded_file($source, $destination)) {
                    $params['image'] = $image;
                }
            }
            if ($id > 0) {
                $this->model->update($params, $id);
            } else {
                $this->model->insert($params);
            }
            header('Location: /movies');
        }

    }

    public function delete($id)
    {
        $this->model->delete($id);
        header('Location: /movies');
    }
}
