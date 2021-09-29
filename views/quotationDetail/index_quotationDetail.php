<table border = 1>
new student <a href=?controller=quotation&action=newQuotationDetail> click </a> <br>
<tr> <td>ID</td><td>cusName</td><td>empName</td>
<td>update</td><td>delete</td> </tr>
<?php foreach($quotationDetail_list as $quotationDetail){
    echo "<tr> 
    <td>$quotationDetail->id</td>
    <td>$quotationDetail->cusName</td>  
    <td>$quotationDetail->empName</td> 
    <td> update</td>
    <td>delete</td> </tr>"; }
echo "</table>";
?>