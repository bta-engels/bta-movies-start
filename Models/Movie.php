<?php
require_once('Models/Model.php');

class Movie extends Model
{
    protected $table = "movies";

    public function all(){
        $sql = "SELECT
        CONCAT (a.firstname, ' ', a.lastname) AS author, m.*  
        FROM movies m
        JOIN authors a ON a.id = m.author_id";
        return $this->getAll($sql);
    }
    public function one(int $id){
        $sql = "SELECT 
        CONCAT (a.firstname, ' ', a.lastname) AS author, m.*  
        FROM movies m
        JOIN authors a ON a.id = m.author_id 
        WHERE m.id=?";
        return $this->getOne($sql, [$id]);

    }
     /**
     * @param int $id
     * @return void
     */
    public function delete(int $id) {
    }

    /**
     * @param array $params
     * @return void
     */
    public function insert(array $params) {
        $sql = "INSERT INTO `movies` (`id`, `author_id`, `title`, `price`, `image`) 
        VALUES (NULL, '', '', '', NULL) ";
        return $this->table->getOne($sql, [$id]);
    }

    /**
     * @param array $params
     * @param int $id
     * @return void
     */
    public function update(array $params, int $id) {
        $sql = "UPDATE `movies`
        SET `id` = '[id]',
            `author_id` = '[author_id]',
            `title` = '[title]',
            `price` = '[price]',
            `image` = NULL
        WHERE $id";
    }
}

