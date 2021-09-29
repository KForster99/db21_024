
<table border = 1>
<tr> <td>ID</td><td>cusName</td><td>empName</td>
<td>update</td><td>delete</td> </tr>
<?php foreach($quotation_list as $quotation){
    echo "<tr> 
    <td>$quotation=>$id</td>
    <td>$quotationt->cusName</td>  
    <td>$quotation->empName</td> 
    <td> update</td>
    <td>delete</td> </tr>"; }
echo "</table>";
?>