<?php
class Client
{

    private $conn;
    private $table_name = "spravka";

    public $id;
    public $name;
    public $family;
    public $middle_name;
    public $n_reg_doc;
    public $type_category;
    public $category;
    public $power;

    public function __construct($db)
    {
        $this->conn = $db;
    }

    function create()
    {

        $query = "INSERT INTO " . $this->table_name . " (name, family, middle_name, n_reg_doc, power, category, type_category)
                VALUES (:name, :family, :middle_name, :n_reg_doc, :power, :category, :type_category)";

        //защита от инъекций
        $this->name = htmlspecialchars(strip_tags($this->name));
        $this->family = htmlspecialchars(strip_tags($this->family));
        $this->middle_name = htmlspecialchars(strip_tags($this->middle_name));
        $this->n_reg_doc = htmlspecialchars(strip_tags($this->n_reg_doc));
        $this->type_category = htmlspecialchars(strip_tags($this->type_category));
        $this->category = htmlspecialchars(strip_tags($this->category));
        $this->power = htmlspecialchars(strip_tags($this->power));

        $stmt = $this->conn->prepare($query);

        // bind values
        $stmt->bindParam(":name", $this->name);
        $stmt->bindParam(":family", $this->family);
        $stmt->bindParam(":middle_name", $this->middle_name);
        $stmt->bindParam(":n_reg_doc", $this->n_reg_doc);
        $stmt->bindParam(":type_category", $this->type_category);
        $stmt->bindParam(":category", $this->category);
        $stmt->bindParam(":power", $this->power);

        if ($stmt->execute())
        {
            return true;
        }
        else
        {
            return false;
        }

    }

    function update()
    {

        $query = "UPDATE
                   " . $this->table_name . "
                   SET
                      name = :name,
                      family = :family,
                      middle_name = :middle_name,
                      n_reg_doc = :n_reg_doc,
                      power = :power,
                      category = :category,
                      type_category = :type_category
                   WHERE
                     id = :id";

        $stmt = $this->conn->prepare($query);

        //защита от инъекций
        $this->name = htmlspecialchars(strip_tags($this->name));
        $this->family = htmlspecialchars(strip_tags($this->family));
        $this->middle_name = htmlspecialchars(strip_tags($this->middle_name));
        $this->n_reg_doc = htmlspecialchars(strip_tags($this->n_reg_doc));
        $this->type_category = htmlspecialchars(strip_tags($this->type_category));
        $this->category = htmlspecialchars(strip_tags($this->category));
        $this->power = htmlspecialchars(strip_tags($this->power));
        $this->id = htmlspecialchars(strip_tags($this->id));

        // bind parameters
        $stmt->bindParam(":id", $this->id);
        $stmt->bindParam(":name", $this->name);
        $stmt->bindParam(":family", $this->family);
        $stmt->bindParam(":middle_name", $this->middle_name);
        $stmt->bindParam(":n_reg_doc", $this->n_reg_doc);
        $stmt->bindParam(":type_category", $this->type_category);
        $stmt->bindParam(":category", $this->category);
        $stmt->bindParam(":power", $this->power);

        // execute the query
        if ($stmt->execute())
        {
            return true;

        }
        else
        {
            return false;
        }

    }

    function readOne()
    {

        $query = "SELECT
                    *
                FROM
                    " . $this->table_name . "
                WHERE
                    id = ?";

        $stmt = $this->conn->prepare($query);
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

    function delete()
    {

        $query = "DELETE FROM " . $this->table_name . " WHERE id = ?";

        $stmt = $this->conn->prepare($query);
        $stmt->bindParam(1, $this->id);

        if ($result = $stmt->execute())
        {
            return true;
        }
        else
        {
            return false;
        }
    }

}
