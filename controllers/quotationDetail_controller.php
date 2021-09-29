<?php
    class QuotationDetailController{
        public function index()
        {
            $quotationDetail_list = QuotationDetail::getAll();
            require_once("./views/quotationDetail/index_quotationDetail.php");
        }

        public function newQuotationDetail()
        {
            echo "new1";
            $product_list = ProductColor::getAll();
            echo "new2";
            $quotation_list = Quotation::getAll();
            echo "new3";
            require_once("./views/quotationDetail/newQuotationDetail.php");
        }

        public function addQuotationDetail()
        {
            $QID = $_GET['QID'];
            $PID = $_GET['proID'];
            $Color = $_GET['PColor'];
            $Unit = $_GET['Unit'];
            $UnitPrice = $_GET['UnitPrice'];
            $Amount = $_GET['Amount'];
            
            echo $QID." ".$PID." ".$Color." ".$Unit." ".$UnitPrice." ".$Amount;

            QuotationDetail::Add($QID,$PID,$Color,$Unit,$UnitPrice,$Amount);
            QuotationDetailController::index();

        }

    }
?>