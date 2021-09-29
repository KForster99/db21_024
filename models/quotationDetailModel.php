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
        $sql = "select quotation_detail.Q_ID, product_color.P_ID, product_color.PC_Color, quotation_detail.QD_Quantity , ( MIN(product_rate.PR_Price) + MIN(product_rate.PR_ScreenPrice) * (quotation_detail.QD_ScreenQty-1) ) AS Price, ( ( ( MIN(product_rate.PR_Price) + MIN(product_rate.PR_ScreenPrice) * (quotation_detail.QD_ScreenQty-1) ) ) * quotation_detail.QD_Quantity) AS Total FROM product_rate
        NATURAL JOIN product
        NATURAL JOIN product_color  
        NATURAL JOIN quotation_detail   
        WHERE product_rate.PR_QtyMoreThan < quotation_detail.QD_Quantity   
        GROUP BY product_rate.P_ID, quotation_detail.QD_ID    
        ORDER by quotation_detail.QD_ID";
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
    public static function Add($QID,$PID,$Color,$Unit,$UnitPrice,$Amount)
    {
        require("connection_connect.php");
        $sql = "";
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
