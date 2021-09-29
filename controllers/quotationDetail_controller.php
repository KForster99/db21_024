<?php
    class QuotationDetailController{
        public function index()
        {
            $quotationDetail_list = QuotationDetail::getAll();
            require_once("./views/quotationDetail/index_quotationDetail.php");
        }
        public function newQuotationDetail()
        {
            $product_list = QuotationDetail::getAll();
            require_once("./views/quotationDetail/newQuotationDetail.php");
        }
    }
?>