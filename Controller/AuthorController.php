<?php

require_once('Controller/Controller.php');
require_once('Models/Author.php');

class AuthorController extends Controller {

  public function index(){
    // @todo: get authors from db (use model)
//    $model = new Author;
    $data = (new Author)->all();
    //Helper::dump($data);
    require_once('Views/author/index.php');
   
  }

  public function show ($id){
    require_once('Views/author/show.php');
  }
}
