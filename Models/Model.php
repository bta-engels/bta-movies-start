<?php
require_once 'inc/MyDB.php';

/**
 *
 */
class Model extends MyDB {

    /**
     * @var
     */
    protected $table;


    /**
     * @return void
     * public function all wird von MyDb getAll geerbt und da in zeile 20 schon getAll als name vorkommt
     * nennen wir es "All". MyDB ist allgemeiner und hier in Model verfeinern wir und konkretisieren wir immer mehr
     */
    public function all() {
        $sql = "SELECT * FROM $this->table";
        return $this->getAll($sql);
    }

    /**
     * @param int $id
     * @return void
     */
    public function one(int $id) {
        $sql = "SELECT * FROM $this->table WHERE id=?";
        return $this->getOne($sql,[$id]);
    }

    /**
     * @param int $id
     * @return void
     */
    public function delete(int $id) {
        $this->getOne($sql,[$id]);
    }
    /* public function delete_index($id)   
	{
		$this->db->delete('mvc', "`id` = {$id}");
		
	} */

    /**
     * @param array $params
     * @return void
     */
    public function insert(array $params) {
     // $sql = "INSERT INTO `authors`(`id`, `firstname`, `lastname`) VALUES ('[value-1]','[value-2]','[value-3]')
    }

    /**
     * @param array $params
     * @param int $id
     * @return void
     */
    public function update(array $params, int $id) {
        
    }
}
?>
