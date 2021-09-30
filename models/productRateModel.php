<?php

    class ProductRate{

        public $ID;
        public $P_ID;
        public $P_Name;
        public $QtyMorethan;
        public $Price;
        public $ScreenPrice;

        public function __construct($ID ,$P_ID ,$P_Name ,$QtyMoreThan ,$Price ,$ScreenPrice){
            $this->ID = $ID;
            $this->P_ID = $P_ID;
            $this->P_Name = $P_Name;
            $this->QtyMorethan = $QtyMoreThan;
            $this->Price = $Price;
            $this->ScreenPrice = $ScreenPrice;
        }

        // public static function get()
        // {
        //     require("connection_connect.php");
        //     $sql = "";
        //     $result = $conn->query($sql);
        //     $my_row = $result->fetch_assoc();

        //     require("connection_close.php");
        //     return ;
        // }

        public static function getAll(){
            $productRateList = [];
            require("connection_connect.php");
            $sql = "SELECT * FROM product,product_rate WHERE product.P_ID = product_rate.P_ID";
            $result = $conn->query($sql);
            while ($my_row = $result->fetch_assoc()) {
                $ID = $my_row[PR_ID];
                $P_ID = $my_row[P_ID];
                $P_Name = $my_row[P_Name];
                $QtyMoreThan = $my_row[PR_QtyMoreThan];
                $Price = $my_row[PR_Price];
                $ScreenPrice = $my_row[PR_ScreenPrice];

                $productRateList[] = new ProductRate($ID, $P_ID, $P_Name, $QtyMoreThan, $Price, $ScreenPrice);
            }
            require("connection_close.php");
            return $productRateList;
        }

        public static function search($key)
        {
            $productRateList = [];
            require("connection_connect.php");
            $sql = "SELECT * FROM product,product_rate WHERE product.P_ID = product_rate.P_ID AND ( product.P_ID LIKE '%$key%' OR product.P_Name LIKE '%$key%')";
            $result = $conn->query($sql);
            while ($my_row = $result->fetch_assoc()) {
                $ID = $my_row[PR_ID];
                $P_ID = $my_row[P_ID];
                $P_Name = $my_row[P_Name];
                $QtyMoreThan = $my_row[PR_QtyMoreThan];
                $Price = $my_row[PR_Price];
                $ScreenPrice = $my_row[PR_ScreenPrice];

                $productRateList[] = new ProductRate($ID, $P_ID, $P_Name, $QtyMoreThan, $Price, $ScreenPrice);
            }
            require("connection_close.php");
            return $productRateList;
        }

        public static function Add($ID, $P_ID, $QtyMoreThan, $Price, $ScreenPrice)
        {
            require("connection_connect.php");
            $sql = "INSERT INTO product_rate (PR_ID, PR_QtyMoreThan, PR_Price, PR_ScreenPrice, P_ID) VALUES ('$ID', '$QtyMoreThan', '$Price', '$ScreenPrice', '$P_ID')";
            $result = $conn->query($sql);
            require("connection_close.php");
            return ;
        }

        // public static function update()
        // {
        //     require("connection_connect.php");
        //     $sql = "";
        //     $result = $conn->query($sql);
        //     require("connection_close.php");
        //     return ;
        // }

        // public static function delete()
        // {
        //     require_once("connection_connect.php");
        //     $sql = "";
        //     $result = $conn->query($sql);
        //     require("connection_close.php");
        //     return ;
        // }

    }
