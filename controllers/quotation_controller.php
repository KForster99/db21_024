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
        $customer_list = Customer::getAll();
        $employee_list = Employee::getAll();
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
        $Q_ID = $_GET['Q_ID'];
        $Q_Date = $_GET['Q_Date'];
        $C_ID = $_GET['C_ID'];
        $C_Address = $_GET['C_Address'];
        $C_Phone = $_GET['C_Phone'];
        $E_ID = $_GET['E_ID'];

        Quotation::add($Q_ID, $C_ID, $E_ID, $Q_Date, $C_Address, $C_Phone);
        QuotationController::index();
    }

    public function updateFormQuotation()
    {
        $Q_ID = $_GET['Q_ID'];
        $quotation = Quotation::get($Q_ID);
        $customer_list = Customer::getAll();
        $employee_list = Employee::getAll();
        require_once("./views/quotation/updateFormQuotation.php");
    }

    public function updateQuotation()
    {
        $Q_ID = $_GET['Q_ID'];
        $Q_Date = $_GET['Q_Date'];
        $C_ID = $_GET['C_ID'];
        $C_Address = $_GET['C_Address'];
        $C_Phone = $_GET['C_Phone'];
        $E_ID = $_GET['E_ID'];

        Quotation::update($Q_ID, $Q_Date, $C_ID, $C_Address, $C_Phone, $E_ID);
        QuotationController::index();
    }

    public function deleteConfirmQuotation()
    {
        $Q_ID = $_GET['Q_ID'];
        $quotation_list = Quotation::get($Q_ID);
        require_once("./views/quotation/deleteConfirmQuotation.php");
    }

    public function deleteQuotation()
    {
        $Q_ID = $_GET['Q_ID'];

        Quotation::delete($Q_ID);
        QuotationController::index();
    }
}
