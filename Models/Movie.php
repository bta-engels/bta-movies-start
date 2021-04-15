<?php
require_once 'Model.php';

class Movie extends Model {

    protected $table = 'movies';

    public function insert(array $params) {
        $sql = "INSERT INTO $this->table (author_id, title, price, image) VALUES (:author_id, :title, :price, :image)";
        return $this->prepareAndExecute($sql, $params);
    }
    
    public function update(array $params, int $id) {
        $sql = "UPDATE $this->table SET author_id = :author_id, title = :title, price = :price, image = :image WHERE id=:id";
        $params['id'] = $id;
        return $this->prepareAndExecute($sql, $params);
    }
}
