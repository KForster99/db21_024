<?php echo "<br> Are you sure to delete this quotationDetail <br>
            <br> $quotationDetail->Qid $quotationDetail->Pname สี$quotationDetail->Pcolor จำนวน:$quotationDetail->Unit จำนวนที่Screen: $quotationDetail->QDScr <br>";?>

<form method="get" action="">

<input type="hidden" name="controller" value="quotationDetail"/>
<input type="hidden" name="ID" value="<?php echo $quotationDetail->QDid; ?>"/>
<button type="submit" name="action" value="index"> Back</button>
<button type="submit" name="action" value="delete"> Save</button>

</form>