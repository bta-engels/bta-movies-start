<?php
require_once('Models/Model.php');

class Author extends Model
{
    protected $table = "authors";

    public function all(){
        $sql = "SELECT * FROM authors";
        return $this->getAll($sql);
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
      
            $sql = "INSERT INTO `authors` (`id`, `firstname`, `lastname`) 
            VALUES (NULL, ?, ?,) ";
            return $this->table->getOne($sql, [$id]);
        
    }

    /**
     * @param array $params
     * @param int $id
     * @return void
     */
    public function update(array $params, int $id) {
    }

}
