<?php
class Quotation
{
    public $Q_ID;
    public $C_ID;
    public $E_ID;
    public $Q_Date;
    public $C_Name;
    public $C_Address;
    public $C_Phone;
    public $E_Name;

    public function __construct($Q_ID, $C_ID, $E_ID, $Q_Date, $C_Name, $C_Address, $C_Phone, $E_Name)
    {
        $this->Q_ID = $Q_ID;
        $this->C_ID = $C_ID;
        $this->E_ID = $E_ID;
        $this->Q_Date = $Q_Date;
        $this->C_Name = $C_Name;
        $this->C_Address = $C_Address;
        $this->C_Phone = $C_Phone;
        $this->E_Name = $E_Name;
    }

    public static function get()
    {
        require("connection_connect.php");
        $sql = "";
        $result = $conn->query($sql);
        $my_row = $result->fetch_assoc();

        require("connection_close.php");
        return ;
    }

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
            $Q_Date = $my_row[Q_Date];
            $C_Name = $my_row[C_Name];
            $C_Address = $my_row[C_Address];
            $C_Phone = $my_row[C_Phone];
            $E_Name = $my_row[E_Name];
            $quotationList[] = new Quotation($Q_ID, $C_ID, $E_ID, $Q_Date, $C_Name, $C_Address, $C_Phone, $E_Name);
        }
        require("connection_close.php");
        return $quotationList;
    }

    public static function search($key)
    {
        $quotationList = [];
        require("connection_connect.php");
        $sql = "SELECT * FROM quotation,employee,customer WHERE quotation.E_Sale = employee.E_ID AND quotation.C_ID = customer.C_ID AND (quotation.Q_ID LIKE '%$key%' OR customer.C_ID LIKE '%$key%' OR customer.C_Name LIKE '%$key%' OR employee.E_ID LIKE '%$key%' OR employee.E_Name LIKE '%$key%' OR quotation.Q_Date LIKE '%$key%' OR customer.C_Address LIKE '%$key%' OR customer.C_Phone LIKE '%$key%')";
        $result = $conn->query($sql);
        while ($my_row = $result->fetch_assoc()) {
            $Q_ID = $my_row[Q_ID];
            $C_ID = $my_row[C_ID];
            $E_ID = $my_row[E_ID];
            $Q_Date = $my_row[Q_Date];
            $C_Name = $my_row[C_Name];
            $C_Address = $my_row[C_Address];
            $C_Phone = $my_row[C_Phone];
            $E_Name = $my_row[E_Name];
            $quotationList[] = new Quotation($Q_ID, $C_ID, $E_ID, $Q_Date, $C_Name, $C_Address, $C_Phone, $E_Name);
        }
        require("connection_close.php");
        return $quotationList;
    }

    public static function add($C_ID, $E_ID, $Q_Date, $C_Address, $C_Phone)
    {
        require("connection_connect.php");
        $sql = "INSERT INTO `Quotation` (`Q_Date`, `C_ID`, `C_Address`, `C_Phone`,`E_ID`) VALUES ('$Q_Date', '$C_ID', '$C_Address', '$C_Phone','$E_ID')";
        $result = $conn->query($sql);
        require("connection_close.php");
        return "add success $result rows";
    }

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
