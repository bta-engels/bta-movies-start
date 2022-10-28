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
            JOIN authors a ON a.id = m.author_id";
            
        return $this->getAll($sql);
    } 

    /**
     * @param array $params
     * @return void
     */
    public function insert(array $params) {
    }

    /**
     * @param array $params
     * @param int $id
     * @return void
     */
    public function update(array $params, int $id) {
    }

}
