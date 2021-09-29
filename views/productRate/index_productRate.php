<table border = 1>
<tr>
<td> P_ID </td>
<td> P_Name </td>
<td> QtyMorethan </td>
<td> Price </td>
<td> ScreenPrice </td>
<td> update </td>
<td> delete </td>
</tr>
<?php foreach( $productRate_list as $productRate ) {
    echo "<tr>
    <td> $productRate->P_ID </td> 
    <td> $productRate->P_Name </td>
    <td> $productRate->QtyMorethan </td>
    <td> $productRate->Price </td> 
    <td> $productRate->ScreenPrice </td> 
    <td> update </td>
    <td> delete </td> </tr>"; 
}
echo "</table>";
?>