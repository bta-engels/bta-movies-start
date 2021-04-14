<?php
require_once 'Model.php';

class Movie extends Model {

    protected $table = 'movies';

/*
    public function insert(array $params) {
        $sql = "INSERT INTO authors (firstname, lastname) VALUES (:firstname, :lastname)";
        return $this->prepareAndExecute($sql, $params);
    }
    
    public function update(array $params, int $id) {
        $sql = "UPDATE authors SET firstname = :firstname, lastname = :lastname WHERE id=:id";
        $params['id'] = $id;
        return $this->prepareAndExecute($sql, $params);
    }
*/    
}
