<?php

    class Product{

        public $proID;
        public $proName;

        public function __construct($proID, $proName){
            $this->proID = $proID;
            $this->proName = $proName;
        }

        public static function getAll(){
            echo "getAll";
            $productList = [];
            require("connection_connect.php");
            $sql = "select * from product";
            $result = $conn->query($sql);
            while ($my_row = $result->fetch_assoc()) {
                $proID = $my_row[P_ID];
                $proName = $my_row[P_Name];
                $productList[] = new ProductColor($proID, $proName);
            }
            require("connection_close.php");
            return $productList;
        }
    }
