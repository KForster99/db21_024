<?php
    class QuotationDetailController{
        public function index()
        {
            $quotationDetail_list = QuotationDetail::getAll();
            require_once("./views/quotation_detail/index_quotation_detail.php");
        }
        // public function newQuotation()
        // {
        //     $quotation_list = Quotation::getAll();
        //     require_once("./views/quotation/index_quotation.php");
        // }
    }
?>