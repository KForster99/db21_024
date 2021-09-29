<form method="get" action="">

<label>QuotationID <select name="QID">
<?php foreach($quotationDetail_list as $quotationDetail){
        echo "<option value = $quotationDetail->Qid>
        $pquotationDetail->Qid</option>";}?>
</select></label>

<label>ProductID <select name="procID">
<?php foreach($product_list as $pro){
        echo "<option value = $pro->procID>
        $pro->proName $pro->color</option>";}?>
</select></label>

<label>Unit<input type="text" name="Unit"/> </label><br>


<input type="hidden" name="controller" value="quotationDetail"/>
<button type="submit" name="action" value="index"> Back</button>
<button type="submit" name="action" value="addQuotationDetail"> Save</button>
</form>