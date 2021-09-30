<?php

    class ProductRateController{

        public function index(){
            $productRate_list = ProductRate::getAll();
            require_once("./views/productRate/index_productRate.php");
        }

        public function newQuotation(){
            $customer_list = Customer::getAll();
            $employee_list = Employee::getAll();
            require_once("./views/quotation/newQuotation.php");
        }

    }
    
?>