<?php
class Database{

    private $host = "localhost";
    private $port = 5432;
    private $db_name = "vue_spa";
    private $username = "andreipunt90";
    private $password = "Ii2329925";
    public $conn;

    public function getConnection(){

        $this->conn = null;

        try{
            $this->conn = new PDO("pgsql:host=".$this->host.";port=".$this->port.";dbname=".$this->db_name."", $this->username, $this->password);
        }catch(PDOException $exception){
            echo "Connection error: " . $exception->getMessage();
        }

        return $this->conn;
    }
}
?>
