<?php

require_once('Controller/Controller.php');

class AuthorController extends Controller {

  public function index(){
    // @todo: get authors from db (use model)
    require_once('Views/author/index.php');
  }
}
