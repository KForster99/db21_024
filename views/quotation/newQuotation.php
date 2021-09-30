<br><?php print_r($quotation_list);?><br>
<br><?php print_r($customer_list);?><br>
<br><?php print_r($employee_list);?><br>

<form method="get" action="">
    <label>เลขใบเสนอราคา
        <select name="QID">
            <?php
            foreach ($quotation_list as $quotation) {
                echo "<option value = $quotation->Q_ID>$quotation->Q_ID</option>";
            } ?></select></label><br>
    <label>วันที่<input type="date" name="date" /></label><br>
    <label>ลูกค้า
        <select name="cusName">
            <?php
            foreach ($customer_list as $customer) {
                echo "<option value=$customer->C_ID>$customer->cusName</option>";
            } ?> </select></label><br>
    <label>ที่อยู่ลูกค้า<input type="text" name="cusAddress" /></label><br>
    <label>เบอร์โทรศัพท์<input type="text" name="cusPhone" /></label><br>
    <label>พนักงาน
        <select name="empName">
            <?php
            foreach ($employee_list as $employee) {
                echo "<option value=$employee->E_ID>$employee->empName</option>";
            } ?></select></label><br>

    <input type="hidden" name="controller" value="quotation" />
    <button type="submit" name="action" value="index"> Back</button>
    <button type="submit" name="action" value="addQuotation"> Save</button>
</form>