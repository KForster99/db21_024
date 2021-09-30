<?php

    class Product{

        public $proID;
        public $proName;

        public function __construct($ID, $Name){
            $this->ID = $ID;
            $this->Name = $Name;
        }

        public static function getAll(){
            $quotationDetailList = [];
            require( "connection_connect.php" );
            $sql = "select * from product,product_rate where product.P_ID = product_rate.P_ID";
            $result = $conn->query($sql);
            while ( $my_row = $result->fetch_assoc() ) {
                $ID = $my_row[PR_ID];
                $P_ID = $my_row[P_ID];
                $P_Name = $my_row[P_Name];
                $QtyMoreThan = $my_row[PR_QtyMoreThan];
                $Price = $my_row[PR_Price];
                $ScreenPrice = $my_row[PR_ScreenPrice];

                $productRateList[] = new ProductRate($ID ,$P_ID ,$P_Name ,$QtyMoreThan ,$Price ,$ScreenPrice);
            }
            require("connection_close.php");
            return $productRateList;
        }

    }
