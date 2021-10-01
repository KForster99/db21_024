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

    public function addQuotation()
    {
        $Q_Date = $_GET['Q_Date'];
        $C_ID = $_GET['C_ID'];
        $C_Address = $_GET['C_Address'];
        $C_Phone = $_GET['C_Phone'];
        $E_ID = $_GET['E_ID'];

        Quotation::add($C_ID, $E_ID, $Q_Date, $C_Address, $C_Phone);
        QuotationController::index();
    }

    // public function updateFormQuotation()
    // {
    //     $ID = $_GET['ID'];
    //     $quotation_list = Quotation::get($ID);

    //     require_once("./views/quotationDetail/updateFormQuotationDetail.php");
    // }

    // public function updateQuotation()
    // {
    //     $ID = $_GET['ID'];
    //     $NewQDID = $_GET['QID'] . "_" . $_GET['procID'];
    //     $QID = $_GET['QID'];
    //     $PCID = $_GET['procID'];
    //     $QtyScr = $_GET['QtyScr'];
    //     $Unit = $_GET['Unit'];
    //     Quotation::update($NewQDID, $QID, $PCID, $QtyScr, $Unit, $ID);
    //     QuotationController::index();
    // }
}
