<?php
    class QuotationDetailController{
        public function index()
        {
            $quotation_list = QuotationDetail::getAll();
            require_once("./views/quotation/index_quotation.php");
        }
        // public function newQuotation()
        // {
        //     $quotation_list = Quotation::getAll();
        //     require_once("./views/quotation/index_quotation.php");
        // }
    }
?>