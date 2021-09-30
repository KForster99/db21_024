<?php

    class ProductRateController{

        public function index(){
            $productRate_list = ProductRate::getAll();
            require_once("./views/productRate/index_productRate.php");
        }

        public function newProductRate(){
            $product_list = Product::getAll();
            require_once("./views/quotation/newQuotation.php");
        }

    }

?>