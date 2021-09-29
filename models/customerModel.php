<?php
class Customer
{
    public $id, $name;

    public function __construct($id, $name)
    {
        $this->id = $id;
        $this->name = $name;
    }
    public static function getAll()
    {
        $customerList = [];
        require("connection_connect.php");
        $sql = "select * from customer";
        $result = $conn->query($sql);
        while ($my_row = $result->fetch_assoc()) {
            $cusID = $my_row[C_ID];
            $cusName = $my_row[C_Name];
            $customerList[] = new Customer($cusID, $cusName);
        }
        require("connection_close.php");
        return $customerList;
    }
}
