<?php
class Quotation
{
    public $id;
    public $date;
    public $cusName;
    public $cusAddress;
    public $cusPhone;
    public $empName;

    public function __construct($id, $date, $cusName, $cusAddress, $cusPhone, $empName)
    {
        $this->id = $id;
        $this->date = $date;
        $this->cusName = $cusName;
        $this->cusAddress = $cusAddress;
        $this->cusPhone = $cusPhone;
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
        $quotationList = [];
        require("connection_connect.php");
        $sql = "select * from quotation,employee,customer where quotation.E_Sale = employee.E_ID and quotation.C_ID = customer.C_ID";
        $result = $conn->query($sql);
        while ($my_row = $result->fetch_assoc()) {
            $id = $my_row[Q_ID];
            $date = $my_row[Q_Date];
            $cusName = $my_row[C_Name];
            $cusAddress = $my_row[C_Address];
            $cusPhone = $my_row[C_Phone];
            $empName = $my_row[E_Name];
            $quotationList[] = new Quotation($id, $date, $cusName, $cusAddress, $cusPhone, $empName);
        }
        require("connection_close.php");
        return $quotationList;
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
