<form method="get" action="">
<label>QuotationID<input type="text" name="QID"/> </label><br>
<label>ProductID <select name="PID">
<?php foreach($product_list as $pro){
        echo "<option value= $pro->proid>
        $pro->proname</option>";}?>
<label>Color<input type="text" name="Color"/> </label><br>
<label>Unit<input type="text" name="Unit"/> </label><br>
<label>Unit Price<input type="text" name="UnitPrice"/> </label><br>
<label>Amount<input type="text" name="Amount"/> </label><br>