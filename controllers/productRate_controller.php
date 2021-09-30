<?php

    class ProductRateController{

        public function index(){
            $productRate_list = ProductRate::getAll();
            require_once("./views/productRate/index_productRate.php");
        }

        public function newProductRate(){
            $product_list = Product::getAll();
            require_once("./views/productRate/newProductRate.php");
        }

        public function addProductRate(){
            $ID = $_GET['P_ID'];
            $P_ID = $_GET['P_ID'];
            $QtyMoreThan = $_GET['QtyMoreThan'];
            $Price = $_GET['Price'];
            $ScreenPrice = $_GET['ScreenPrice'];

            ProductRate::Add($ID, $P_ID, $QtyMoreThan ,$Price ,$ScreenPrice);

            QuotationDetailController::index();
        }

    }

?>