<?php
class Product
{
    public $proID, $proName;

    public function _construct($proID, $proName)
    {
        $this->proID = $proID;
        $this->proName = $proName;
    }
    public static function getAll()
    {
        echo "getAll";
        $productList = [];
        require("connection_connect.php");
        $sql = "select * from product";
        $result = $conn->query($sql);
        while ($my_row = $result->fetch_assoc()) {
            $proID = $my_row[P_ID];
            $proName = $my_row[P_Name];
            echo "show id = ".$proID;
            echo "show name = ".$proName;
            $productList[] = new Product($proID, $proName);
        }
        require("connection_close.php");
        return $productList;
    }
}
