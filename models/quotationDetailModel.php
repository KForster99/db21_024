<?php
class QuotationDetail
{
    public $id;
    public $cusName;
    public $empName;

    public function __construct($id, $cusName, $empName)
    {
        $this->id = $id;
        $this->cusName = $cusName;
        $this->empName = $empName;
    }
    // public static function get()
    // {
    //     require("connection_connect.php");
    //     $sql = "";
    //     $result = $conn->query($sql);
    //     $my_row = $result->fetch_assoc();

    //     require("connection_close.php");
    //     return ;
    // }
    public static function getAll()
    {
        $quotationDetailList = [];
        require("connection_connect.php");
        $sql = "select * from quotation,employee,customer where quotation.E_Sale = employee.E_ID and quotation.C_ID = customer.C_ID";
        $result = $conn->query($sql);
        while ($my_row = $result->fetch_assoc()) {
            $id = $my_row[Q_ID];
            $cusName = $my_row[C_Name];
            $empName = $my_row[E_Name];
            $quotationDetailList[] = new QuotationDetail($id, $cusName, $empName);
        }
        require("connection_close.php");
        return $quotationDetailList;
    }
    // public static function search()
    // {
    //     require("connection_connect.php");
    //     $sql = "";
    //     $result = $conn->query($sql);
    //     while ($my_row = $result->fetch_assoc()) {

    //     }
    //     require("connection_close.php");
    //     return ;
    // }
    // public static function add()
    // {
    //     require("connection_connect.php");
    //     $sql = "";
    //     $result = $conn->query($sql);
    //     require("connection_close.php");
    //     return ;
    // }
    // public static function update()
    // {
    //     require("connection_connect.php");
    //     $sql = "";
    //     $result = $conn->query($sql);
    //     require("connection_close.php");
    //     return ;
    // }
    // public static function delete()
    // {
    //     require_once("connection_connect.php");
    //     $sql = "";
    //     $result = $conn->query($sql);
    //     require("connection_close.php");
    //     return ;
    // }
}
