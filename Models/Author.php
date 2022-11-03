<?php
require_once('Models/Model.php');

class Author extends Model
{
    protected $table = "authors";

    public function all() {
        $sql = "SELECT * FROM authors";
        return $this->getAll($sql);
        }

    public function one(int $id){
        $sql = "SELECT firstname, lastname FROM authors WHERE id=?";
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
            $sql = "DELETE FROM `authors` WHERE id=$id";
            //$result=$sql($con,$sql);
            return $this->getOne($sql);
        }

    }
  
    /**
     * @param array $params
     * @return void
     */
/*     public function insert(array $params) {
      
            $sql = "INSERT INTO `authors` (`firstname`, `lastname`) 
            VALUES (NULL, ?, ?,) ";
            return $this->table->getOne($sql, [$id]); 
  }  */       
    
    /**
     * @param array $params
     * @param int $id
     * @return void
     */
   /*  public function update(array $params, int $id) {
    } */

}