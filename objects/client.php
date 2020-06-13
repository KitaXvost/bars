<?php
class Client{

    private $conn;
    private $table_name = "spravka";

    public $id;

    public function __construct($db){
        $this->conn = $db;
    }


function delete(){

    $query = "DELETE FROM " . $this->table_name . " WHERE id = ?";

    $stmt = $this->conn->prepare($query);
    $stmt->bindParam(1, $this->id);

    if($result = $stmt->execute()){
        return true;
    }else{
        return false;
    }
}

}
