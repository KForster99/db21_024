<?php
class QuotationController
{
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

    public function searchQuotation()
    {
        $key = $_GET['key'];
        $quotation_list = Quotation::search($key);
        // echo "search";
        require_once("./views/quotation/index_quotation.php");
    }

    public function addQuotationDetail()
    {
        $date = $_GET['date'];
        $CID = $_GET['cusID'];
        $cusAddress = $_GET['cusAddress'];
        $cusPhone = $_GET['cusPhone'];
        $EID = $_GET['empID'];

        Quotation::add($CID, $EID, $date, $cusAddress, $cusPhone);
        QuotationController::index();
    }

    public function updateFormQuotationDetail()
    {
        $ID = $_GET['ID'];
        $quotation_list = Quotation::get($ID);

        require_once("./views/quotationDetail/updateFormQuotationDetail.php");
    }

    public function updateQuotationDetail()
    {
        $ID = $_GET['ID'];

        $NewQDID = $_GET['QID'] . "_" . $_GET['procID'];
        $QID = $_GET['QID'];
        $PCID = $_GET['procID'];
        $QtyScr = $_GET['QtyScr'];
        $Unit = $_GET['Unit'];
        QuotationDetail::update($NewQDID, $QID, $PCID, $QtyScr, $Unit, $ID);
        QuotationDetailController::index();
    }
}
