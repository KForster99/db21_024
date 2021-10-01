<?php
class Quotation
{
    public $Q_ID;
    public $C_ID;
    public $E_ID;
    public $date;
    public $cusName;
    public $cusAddress;
    public $cusPhone;
    public $empName;

    public function __construct($Q_ID,$C_ID,$E_ID,$date, $cusName, $cusAddress, $cusPhone, $empName)
    {
        $this->Q_ID = $Q_ID;
        $this->C_ID = $C_ID;
        $this->E_ID = $E_ID;
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
        // echo "ingetall";
        $quotationList = [];
        require("connection_connect.php");
        $sql = "SELECT * FROM quotation,employee,customer WHERE quotation.E_Sale = employee.E_ID AND quotation.C_ID = customer.C_ID";
        $result = $conn->query($sql);
        // echo $sql;
        while ($my_row = $result->fetch_assoc()) {
            $Q_ID = $my_row[Q_ID];
            $C_ID = $my_row[C_ID];
            $E_ID = $my_row[E_ID];
            $date = $my_row[Q_Date];
            $cusName = $my_row[C_Name];
            $cusAddress = $my_row[C_Address];
            $cusPhone = $my_row[C_Phone];
            $empName = $my_row[E_Name];
            $quotationList[] = new Quotation($Q_ID,$C_ID,$E_ID, $date, $cusName, $cusAddress, $cusPhone, $empName);
        }
        require("connection_close.php");
        return $quotationList;
    }
    public static function search($key)
    {
        $quotationList = [];
        require("connection_connect.php");
        $sql = "SELECT * FROM quotation,employee,customer WHERE quotation.E_Sale = employee.E_ID AND quotation.C_ID = customer.C_ID AND (quotation.Q_ID LIKE '%$key%' OR customer.C_ID LIKE '%$key%' OR customer.C_Name LIKE '%$key%' OR employee.E_ID LIKE '%$key%' OR employee.E_Name LIKE '%$key%')";
        $result = $conn->query($sql);
        while ($my_row = $result->fetch_assoc()) {
            $Q_ID = $my_row[Q_ID];
            $C_ID = $my_row[C_ID];
            $E_ID = $my_row[E_ID];
            $date = $my_row[Q_Date];
            $cusName = $my_row[C_Name];
            $cusAddress = $my_row[C_Address];
            $cusPhone = $my_row[C_Phone];
            $empName = $my_row[E_Name];
            $quotationList[] = new Quotation($Q_ID,$C_ID,$E_ID, $date, $cusName, $cusAddress, $cusPhone, $empName);
        }
        require("connection_close.php");
        return $quotationList;
    }
    // public static function add()
    // {
    //     require("connection_connect.php");
    //     $sql = "";
    //     $result = $conn->query($sql);
    //     require("connection_close.php");
    //     return quotationList;
    // }
    // public static function update()
    // {
    //     require("connection_connect.php");
    //     $sql = "";
    //     $result = $conn->query($sql);
    //     require("connection_close.php");
    //     return quotationList;
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
