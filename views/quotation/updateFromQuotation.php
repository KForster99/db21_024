<br>
<form method="get" action="">
    <label>เลขใบเสนอราคา&nbsp;&nbsp;&nbsp;&nbsp;
        <input type="text" name="Q_ID" value="<?php echo $quotation->Q_ID; ?>" /></label><br>
    <label>วันที่&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        <input type="text" name="Q_Date" value="<?php echo $quotation->Q_Date; ?>" /></label><br>
    <label>ลูกค้า&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        <select name="C_ID">
            <?php
            foreach ($quotation_list as $quotation) {
                echo "<option value=$quotation->C_ID";
                if ($quotation->C_ID == $customer->C_ID) {
                    echo " selected='selected'";
                }
                echo ">$quotation->C_Name</option>";
            } ?> </select></label><br>
    <label>ที่อยู่ลูกค้า&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        <input type="text" name="C_Address" value="<?php echo $quotation->C_Address; ?>" /></label><br>
    <label>เบอร์โทรศัพท์&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        <input type="text" name="C_Phone" value="<?php echo $quotation->C_Phone; ?>" /></label><br>
    <label>พนักงาน&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        <select name="E_ID">
            <?php
            foreach ($quotation_list as $quotation) {
                echo "<option value=$quotation->E_ID";
                if ($quotation->E_Sale == $employee->E_ID) {
                    echo " selected='selected'";
                }
                echo ">$quotation->E_Name</option>";
            } ?></select></label><br><br>

    <input type="hidden" name="controller" value="quotation" />
    <input type="hidden" name="Q_ID" value="<?php echo $quotation->Q_ID; ?>" />
    <button type="submit" name="action" value="index"> Back</button>
    <button type="submit" name="action" value="updateQuotation"> Save</button>
</form>