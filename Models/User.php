<?php

require_once('Models/Model.php');

class User extends Model
{
    protected $table = 'users';

    public function check($username, $password){
        $sql = "
            SELECT * FROM $this->table
            WHERE username = ? 
            AND password = MD5(?)";
        return $this->getOne($sql, [$username, $password]);
    }
}