<table border = 1>
new QuotationDetail <a href=?controller=quotationDetail&action=newQuotationDetail> click </a> <br>
<tr> <td>Quotation ID</td><td>Product ID</td><td>Product Name</td><td>Product Color</td>
<td>Unit</td><td>Unit Price</td><td>Amount</td>

<td>update</td><td>delete</td> </tr>
<?php foreach($quotationDetail_list as $quotationDetail){
    echo "<tr> 
    <td>$quotationDetail->Qid</td>
    <td>$quotationDetail->Pid</td> 
    <td>$quotationDetail->Pname</td> 
    <td>$quotationDetail->Pcolor</td> 
    <td>$quotationDetail->Unit</td> 
    <td>$quotationDetail->UnitPrice</td> 
    <td>$quotationDetail->Total</td> 
    <td> update</td>
    <td>delete</td> </tr>"; }
echo "</table>";
?>