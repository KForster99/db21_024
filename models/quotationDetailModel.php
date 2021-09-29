<?php
class QuotationDetail
{
    public $Qid;
    public $Pid;
    //public $Pname;
    public $Pcolor;
    public $Unit;
    public $UnitPrice;
    public $Total;


    public function __construct($Qid, $Pid, $Pcolor,$Unit, $UnitPrice,$Total)
    {
        $this->Qid = $Qid;
        $this->Pid = $Pid;
        //$this->Pname = $Pname;
        $this->Pcolor = $Pcolor;
        $this->Unit = $Unit;
        $this->UnitPrice = $UnitPrice;
        $this->Total = $Total;

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
        $sql = "select * from Q9";
        $result = $conn->query($sql);
        while ($my_row = $result->fetch_assoc()) {
            $Qid = $my_row[Q_ID];
            $Pid = $my_row[P_ID];
            //$Pname = $my_row[P_Name];
            $Pcolor = $my_row[PC_Color];
            $Unit = $my_row[QD_Quantity];
            $UnitPrice = $my_row[Price];
            $Total = $my_row[Total];

            $quotationDetailList[] = new QuotationDetail($Qid, $Pid, $Pcolor,$Unit,$UnitPrice,$Total);
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
