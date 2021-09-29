
<table border = 1>
<tr> <td>ID</td><td>CusName</td><td>EmpName</td>
<td>update</td><td>delete</td> </tr>
<?php foreach($quotation_list as $quotation){
    echo "<tr> <td>$student->id</td>
    <td>$quotation->cusName</td>  
    <td>$quotation->empName</td> 
    <td> update</td>
    <td>delete</td> </tr>"; }
echo "</table>";
?>