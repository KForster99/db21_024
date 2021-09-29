
<table border = 1>
new quotation<a href="?controller=quotation&action=newQuotation"> click </a><br>
<tr> <td>ID</td><td>cusName</td><td>empName</td>
<td>update</td><td>delete</td> </tr>
<?php foreach($quotation_list as $quotation){
    echo "<tr> 
    <td>$quotation->id</td>
    <td>$quotation->cusName</td>  
    <td>$quotation->empName</td> 
    <td> update</td>
    <td>delete</td> </tr>"; }
echo "</table>";
?>