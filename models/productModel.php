<?php
class Product
{
    public $id, $name;

    public function _construct($id, $name)
    {
        $this->id = $id;
        $this->name = $name;
    }
    public static function getAll()
    {
        $customerList = [];
        require("connection_connect.php");
        $sql = "select * from product";
        $result = $conn->query($sql);
        while ($my_row = $result->fetch_assoc()) {
            $proID = $my_row[P_ID];
            $proName = $my_row[P_Name];
            $customerList[] = new Customer($proID, $proName);
        }
        require("connection_close.php");
        return $customerList;
    }
}
