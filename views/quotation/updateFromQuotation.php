<form method="get" action="">
    <label>เลขใบเสนอราคา&nbsp;&nbsp;&nbsp;&nbsp;
        <select name="QID">
            <?php
            foreach ($quotation_list as $quotation) {
                echo "<option value = $quotation->Q_ID";
                if ($quotation->Q_ID == $quotation->Qid) {
                    echo " selected='selected'";
                }
                echo ">$quotation->Q_ID</option>";
            } ?></select></label><br>
    <label>วันที่&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        <input type="date" name="date" /></label><br>
    <label>ลูกค้า&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        <select name="cusID">
            <?php
            foreach ($quotation_list as $quotation) {
                echo "<option value=$quotation->C_ID>$quotation->cusName</option>";
            } ?> </select></label><br>
    <label>ที่อยู่ลูกค้า&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        <input type="text" name="cusAddress" /></label><br>
    <label>เบอร์โทรศัพท์&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        <input type="text" name="cusPhone" /></label><br>
    <label>พนักงาน&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        <select name="empID">
            <?php
            foreach ($quotation_list as $quotation) {
                echo "<option value=$quotation->E_ID>$quotation->empName</option>";
            } ?></select></label><br>

    <input type="hidden" name="controller" value="quotation" />
    <button type="submit" name="action" value="index"> Back</button>
    <button type="submit" name="action" value="addQuotation"> Save</button>
</form>