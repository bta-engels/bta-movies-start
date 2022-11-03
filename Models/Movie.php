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
        if(isset($_GET['id']))
        {
            $id=$_GET['id'];
            $sql = "DELETE FROM `movies` WHERE id=?";
            //$result=$sql($con,$sql);
            return $this->getOne($sql, [$id]);
        }

    }

    /**
     * @param array $params
     * @return void
     */
  /*    public function insert(array $params) {
        $sql = "INSERT INTO `movies` (`author_id`, `title`, `price`, `image`) 
        VALUES (?, ?, ?, '$image') ";
        VALUES ('[value-1]','[value-2]','[value-3]')

        return $this->table->getOne($sql, [$id]);
    } 
    
*/
public function update(array $params, int $id) {
        $sql = "UPDATE movies
        SET /* id = '$id', */
            author_id = '$author_id',
            title = '$title',
            price = '$price',
            `image` = '$image'
        WHERE $id";
        return $this->table->getOne($sql, [$id]);
    }

 } 



