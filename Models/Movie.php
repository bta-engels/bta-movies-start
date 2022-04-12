<?php
require_once('Models/Model.php');

class Movie extends Model
{
    protected $table = 'movies';

    public function all() {
        $sql = "
            SELECT 
                   m.*,
                   CONCAT(a.firstname, ' ', a.lastname) author 
            FROM $this->table m
            JOIN authors a ON a.id = m.author_id
            ORDER BY m.id DESC";
        return $this->getAll($sql);
    }

    public function find(int $id) {
        $sql = "
            SELECT 
                   m.*,
                   CONCAT(a.firstname, ' ', a.lastname) author 
            FROM $this->table m
            JOIN authors a ON a.id = m.author_id
            WHERE m.id = ?";
        return $this->getOne($sql,[$id]);
    }

}
