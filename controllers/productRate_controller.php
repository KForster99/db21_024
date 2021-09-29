<?php
    class ProductRateController{
        public function index()
        {
            $quotation_list = ProductRate::getAll();
            require_once("./views/quotation/index_quotation.php");
        }
    }
?>