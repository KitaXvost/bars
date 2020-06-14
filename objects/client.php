<?php
class Client{

    private $conn;
    private $table_name = "spravka";

    public $id;

    public function __construct($db){
        $this->conn = $db;
    }



    function readOne(){

        $query = "SELECT
                    *
                FROM
                    " . $this->table_name . "
                WHERE
                    id = ?";

        $stmt = $this->conn->prepare( $query );
        $stmt->bindParam(1, $this->id);
        $stmt->execute();

        $row = $stmt->fetch(PDO::FETCH_ASSOC);

        $this->name = $row['name'];
        $this->middle_name = $row['middle_name'];
        $this->family_name = $row['family'];
        $this->n_reg_doc = $row['n_reg_doc'];
        $this->power = $row['power'];
        $this->category = $row['category'];
        $this->type_category = $row['type_category'];

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
