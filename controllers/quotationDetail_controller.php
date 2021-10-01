<?php
    class QuotationDetailController{
        public function index()
        {
            $quotationDetail_list = QuotationDetail::getAll();
            require_once("./views/quotationDetail/index_quotationDetail.php");
        }

        public function newQuotationDetail()
        {
            $product_list = ProductColor::getAll();
            $quotation_list = Quotation::getAll();
            require_once("./views/quotationDetail/newQuotationDetail.php");
        }

        public function addQuotationDetail()
        {
            $QDID = $_GET['QID']."_".$_GET['procID'];
            $QID = $_GET['QID'];
            $PID = $_GET['procID'];
            $QtyScr = $_GET['QtyScr'];
            $Unit = $_GET['Unit'];
            
            echo $QID." ".$PID." ".$QtyScr." ".$Unit;

            QuotationDetail::Add($QDID,$QID,$PID,$QtyScr,$Unit);
            QuotationDetailController::index();

        }

        public function searchQuotationDetail(){
            $key = $_GET['key'];
            $quotationDetail_list = QuotationDetail::search($key);
            echo "search";
            require_once("./views/quotationDetail/index_quotationDetail.php");
        }

        public function updateFormQuotationDetail(){
            $ID = $_GET['ID'];
            $quotationDetail = QuotationDetail::get($ID);
            $product_list = ProductColor::getAll();
            $quotation_list = Quotation::getAll();

            require_once("./views/quotationDetail/updateFormQuotationDetail.php");
        }

    }
?>