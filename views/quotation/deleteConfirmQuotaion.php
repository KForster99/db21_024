<?php echo "<br> Are you sure to delete this Quotaion <br>
            <br> $quotaion->Q_ID $quotaion->Q_Name <br>"; ?>

<form method="get" action="">

    <input type="hidden" name="controller" value="quotaion" />
    <input type="hidden" name="Q_ID" value="<?php echo $quotaion->Q_ID; ?>" />
    <button type="submit" name="action" value="index"> Back</button>
    <button type="submit" name="action" value="deleteQuotation"> Save</button>

</form>