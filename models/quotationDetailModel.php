<?php
class QuotationDetail
{
    public $Qid;
    public $Pid;
    public $Pname;
    public $Pcolor;
    public $Unit;
    public $QDScr;
    public $UnitPrice;
    public $Total;


    public function __construct($Qid, $Pid,$Pname, $Pcolor,$Unit,$QDScr, $UnitPrice,$Total)
    {
        $this->Qid = $Qid;
        $this->Pid = $Pid;
        $this->Pname = $Pname;
        $this->Pcolor = $Pcolor;
        $this->Unit = $Unit;
        $this->QDScr = $QDScr;
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
        $sql = "SELECT * FROM quotationDetail, quotation_detail, product_color, product WHERE quotationDetail.QD_ID = quotation_detail.QD_ID AND product_color.PC_ID = quotation_detail.PC_ID AND product.P_ID = product_color.P_ID";
        $result = $conn->query($sql);
        while ($my_row = $result->fetch_assoc()) {
            $Qid = $my_row[Q_ID];
            $Pid = $my_row[P_ID];
            $Pname = $my_row[P_Name];
            $Pcolor = $my_row[PC_Color];
            $Unit = $my_row[QD_Quantity];
            $QDScr = $my_row[QD_ScreenQty];
            $UnitPrice = $my_row[Price];
            $Total = $my_row[Total];

            $quotationDetailList[] = new QuotationDetail($Qid, $Pid, $Pname,$Pcolor,$Unit,$QDScr,$UnitPrice,$Total);
        }
        require("connection_close.php");
        return $quotationDetailList;
    }
    public static function search()
    {
        $quotationDetailList = [];
        require("connection_connect.php");
        $sql = "SELECT * FROM quotationDetail, quotation_detail, product_color, product WHERE quotationDetail.QD_ID = quotation_detail.QD_ID AND product_color.PC_ID = quotation_detail.PC_ID AND product.P_ID = product_color.P_ID AND (product.P_ID LIKE '%$key%' OR product.P_Name LIKE '%$key%' OR quotation_detail_QID LIKE '%$key%')";
        $result = $conn->query($sql);
        while ($my_row = $result->fetch_assoc()) {
            $Qid = $my_row[Q_ID];
            $Pid = $my_row[P_ID];
            $Pname = $my_row[P_Name];
            $Pcolor = $my_row[PC_Color];
            $Unit = $my_row[QD_Quantity];
            $QDScr = $my_row[QD_ScreenQty];
            $UnitPrice = $my_row[Price];
            $Total = $my_row[Total];

            $quotationDetailList[] = new QuotationDetail($Qid, $Pid, $Pname,$Pcolor,$Unit,$QDScr,$UnitPrice,$Total);
        }
        require("connection_close.php");
        return $quotationDetailList;
    }
    public static function Add($QDID,$QID,$procID,$QtyScr,$Unit)
    {
        require("connection_connect.php");
        $sql = "INSERT INTO `quotation_detail` (`QD_ID`, `QD_Quantity`, `QD_ScreenQty`, `PC_ID`, `Q_ID`) VALUES ('$QDID', '$Unit', '$QtyScr', '$procID', '$QID');";
        $result = $conn->query($sql);
        require("connection_close.php");
        return ;
    }
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
