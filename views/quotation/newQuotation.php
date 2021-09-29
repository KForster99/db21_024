<form method="get" action="">
    <label>ID<input type="text" name="Q_ID"/></label><br>
    <label>ลูกค้า<select name="C_Name">
        <?php 
        foreach($quotation_list as $quotation){
            echo "<option value=$quotation->id
                                $quotation->cusName
                                $quotation->empName</option>";
        }?>
    </select></label><br>