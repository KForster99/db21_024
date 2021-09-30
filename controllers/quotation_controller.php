<?php
    class QuotationController{
        public function index()
        {
            $quotation_list = Quotation::getAll();
            require_once("./views/quotation/index_quotation.php");
        }
        public function newQuotation()
        {
            $quotation_list = Quotation::getAll();
            $customer_list = Customer::getAll();
            $employee_list = Employee::getAll();
            require_once("./views/quotation/newQuotation.php");
        }
    }
?>