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


}
