<?php
require_once('Models/Model.php');

class User extends Model
{
    protected $table = 'users';

    public function check($username, $password) {
        $sql = "";
    }
}
