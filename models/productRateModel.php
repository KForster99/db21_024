<?php

    class ProductRate{

        public $ID;
        public $P_ID;
        public $P_Name;
        public $QtyMorethan;
        public $Price;
        public $ScreenPrice;

        public function __construct($ID ,$P_ID ,$P_Name ,$QtyMorethan ,$Price ,$ScreenPrice){
            $this->ID = $ID;
            $this->P_ID = $P_ID;
            $this->P_Name = $P_Name;
            $this->QtyMorethan = $QtyMorethan;
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
            $quotationDetailList = [];
            require( "connection_connect.php" );
            $sql = "select * from product,product_rate where product.P_ID = product_rate.P_ID";
            $result = $conn->query($sql);
            while ( $my_row = $result->fetch_assoc() ) {
                $ID = $my_row[PR_ID];
                $P_ID = $my_row[P_ID];
                $P_Name = $my_row[P_Name];
                $QtyMorethan = $my_row[PR_QtyMoreThan];
                $Price = $my_row[PR_Price];
                $ScreenPrice = $my_row[PR_ScreenPrice];

                $productRateList[] = new ProductRate($ID ,$P_ID ,$P_Name ,$QtyMorethan ,$Price ,$ScreenPrice);
            }
            require("connection_close.php");
            return $productRateList;
        }

        // public static function search()
        // {
        //     require("connection_connect.php");
        //     $sql = "";
        //     $result = $conn->query($sql);
        //     while ($my_row = $result->fetch_assoc()) {

        //     }
        //     require("connection_close.php");
        //     return ;
        // }

        // public static function Add()
        // {
        //     require("connection_connect.php");
        //     $sql = "";
        //     $result = $conn->query($sql);
        //     require("connection_close.php");
        //     return ;
        // }

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
