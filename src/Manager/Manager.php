<?php 


class Manager extends Connection
{
    protected $table;

    public function __construct()
    {
        
    }

    protected function findAll()
    {
        $sql = "SELECT * FROM $this->table";
        $stmt = $this->db->query($sql);
        return $stmt->fetchAll();
    }

    protected function findId(int $id)
    {
        $sql = "SELECT * FROM $this->table WHERE id=:id";
        $stmt = $this->db->prepare($sql);
        $stmt->execute([
            ':id' => $id
        ]);
        $result = $stmt->fetch();
        if (!$result) {
            throw new Exception("No entry found with id $id", 1);
            
        }
        return $result;
    }
}