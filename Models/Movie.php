<?php
require_once('Models/Model.php');

class Movie extends Model
{
    protected $table = 'movies';

    public function all() {
        $sql = "SELECT
	        CONCAT(a.firstname, ' ', a.lastname) author,
	        m.*
            FROM movies m
            JOIN authors a ON a.id = m.author_id
            ORDER BY id";
            
        return $this->getAll($sql);
    } 

    public function one(int $id) {
        $sql = "SELECT
	        CONCAT(a.firstname, ' ', a.lastname) author,
	        m.*
            FROM movies m
            JOIN authors a ON a.id = m.author_id
            WHERE m.id = ?";
            
        return $this->getOne($sql, [$id]);
    } 

    public function authors() {
        $sql = "SELECT id, CONCAT(firstname, ' ',lastname) name FROM authors ORDER BY name";
        return $this->getAll($sql);
    }
    /**
     * @param array $params
     * @return void
     */
/*
     public function insert(array $params) {
        $params['image'] = null;
        $sql = "INSERT INTO movies (author_id, title, price, image) VALUES 
        (:author_id, :title, :price, :image)";
        
        return $this->prepareAndExecute($sql, $params);
    }
*/
    /**
     * @param array $params
     * @param int $id
     * @return void
     */
/*
     public function update(array $params, int $id) {
        $params['id'] = $id;
        $params['image'] = null;

        $sql = "UPDATE movies SET 
            author_id = :author_id,
            title = :title, 
            price = :price, 
            image = :image 
        WHERE id = :id";

        return $this->prepareAndExecute($sql, $params);
    }
*/
}
