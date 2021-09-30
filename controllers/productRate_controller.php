<?php

    class ProductRateController{

        public function index(){
            $productRate_list = ProductRate::getAll();
            require_once("./views/productRate/index_productRate.php");
        }

        public function newProductRate(){
            require_once("./views/pages/home.php");
        }

    }

?>