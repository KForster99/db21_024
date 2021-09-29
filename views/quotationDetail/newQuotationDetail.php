<form method="get" action="">
<label>QuotationID<input type="text" name="QID"/> </label><br>

<label>ProductID <select name="proID">
<?php foreach($product_list as $pro){
        echo "<option value = $pro->proID>
        $pro->proName</option>";}?>

</select></label>
<br><label>Color<input type="text" name="PColor"/> </label><br>
<label>Unit<input type="text" name="Unit"/> </label><br>
<label>Unit Price<input type="text" name="UnitPrice"/> </label><br>
<label>Amount<input type="text" name="Amount"/> </label><br>

<input type="hidden" name="controller" value="quotationDetail"/>
<button type="submit" name="action" value="index"> Back</button>
<button type="submit" name="action" value="addQuotationDetail"> Save</button>
</form>