<?php
    class QuotationDetailController{
        public function index()
        {
            $quotationDetail_list = QuotationDetail::getAll();
            require_once("./views/quotationDetail/index_quotationDetail.php");
        }
        // public function newQuotation()
        // {
        //     $quotation_list = Quotation::getAll();
        //     require_once("./views/quotation/index_quotation.php");
        // }
    }
?>