
<table border = 1>
<tr> <td>ID</td><td>CusName</td><td>EmpName</td>
<td>update</td><td>delete</td> </tr>
<?php foreach($quotation_list as $qt){
    echo "<tr> 
    <td>$qt->$id</td>
    <td>$qt->$cusName</td>  
    <td>$qt->$empName</td> 
    <td> update</td>
    <td>delete</td> </tr>"; }
echo "</table>";
?>