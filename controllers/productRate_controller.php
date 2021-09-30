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
            $ID = $_GET['P_ID']."_R";
            while(strlen($ID)+strlen($_GET['QtyMoreThan']) < 10) {
                $ID = $ID."0";
            }
            $ID = $ID.$_GET['QtyMoreThan'];
            $P_ID = $_GET['P_ID'];
            $QtyMoreThan = $_GET['QtyMoreThan'];
            $Price = $_GET['Price'];
            $ScreenPrice = $_GET['ScreenPrice'];

            ProductRate::Add($ID, $P_ID, $QtyMoreThan ,$Price ,$ScreenPrice);

            ProductRateController::index();
        }

        public function search(){
            $key = $_GET['key'];
            $productRate_list = ProductRate::search($key);
            require_once("./views/productRate/index_productRate.php");
        }

        public function updateForm(){
            $ID = $_GET['ID'];
            $productRate = ProductRate::get($ID);
            $product_list = Product::getAll();
            require_once("./views/pages/home.php");
        }

    }

?>