<table border = 1>
new quotation<a href="?controller=quotation&action=newQuotation"> click </a><br>
<tr>
<td>ID</td>
<td>Date</td>
<td>cusName</td>
<td>cusAddress</td>
<td>cusPhone</td>
<td>empName</td>
<td>update</td>
<td>delete</td>
</tr>
<?php foreach($quotation_list as $quotation){
    echo "<tr> 
    <td>$quotation->id</td>
    <td>$quotation->date</td> 
    <td>$quotation->cusName</td>
    <td>$quotation->cusAddress</td>
    <td>$quotation->cusPhone</td> 
    <td>$quotation->empName</td> 
    <td> update</td>
    <td>delete</td> </tr>"; }
echo "</table>";
?>