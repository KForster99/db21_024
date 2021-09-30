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

        public function addQuotationDetail()
        {
            $QID = $_GET['QID'];
            $PID = $_GET['proID'];
            $Color = $_GET['PColor'];
            $Unit = $_GET['Unit'];
            $UnitPrice = $_GET['UnitPrice'];
            $Amount = $_GET['Amount'];
            
            echo $QID." ".$PID." ".$Color." ".$Unit." ".$UnitPrice." ".$Amount;

            QuotationDetail::Add($QID,$PID,$Color,$Unit,$UnitPrice,$Amount);
            QuotationDetailController::index();
        }

    }

?>