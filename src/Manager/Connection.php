<?php 


class Connection
{
    protected $db;

    public function __construct(string $connection = null)
    {
        $host = "localhost:8080";
        $dbname = "geneamania";
        $user = "root";
        $password = "";
 
        $this->db = new PDO("mysql:host=$host;dbname=$dbname", $user, $password);
        $this->db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $this->db->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
    }
}