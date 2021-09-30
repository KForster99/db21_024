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
            require_once("./views/quotation/newQuotation.php");
        }

        public function searchQuotation(){
            $key = $_GET['key'];
            $quotation_list = Quotation::search($key);
            // echo "search";
            require_once("./views/quotation/index_quotation.php");
        }
    }
?>