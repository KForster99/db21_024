<?php
    class ProductRateController{
        public function index()
        {
            $productRate_list = ProductRate::getAll();
            require_once("./views/quotation/index_quotation.php");
        }
    }
?>