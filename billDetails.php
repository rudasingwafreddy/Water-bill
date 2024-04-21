<h3>Bill Details</h3>
<hr>
<form action="processLeave.php?action=addUser" method="post"  name="frmListUser" id="frmListUser">
  <table width="100%" border="0" align="center" cellpadding="2" cellspacing="1" class="text">
    <tr align="center" id="listTableHeader">
      <td width="447">Names</td>
	  <td width="260">Meter </td>
      <td width="260">Quantity </td>
      <td width="139">Price</td>
	  <td width="139">Penalty</td>
      <td width="150">Total </td>
	  
	  <td width="150">Date </td>
	  <td width="150">Option </td>
    </tr>
    <?php
	$cust_id = (int)$_SESSION['user_id'];
	$sql = "SELECT * FROM tbl_bill 
			WHERE cust_id = $cust_id && status!='Confirmed'";
	$result = dbQuery($sql);
	$i=0;
	while($row = dbFetchAssoc($result)) {
	extract($row);
	if ($i%2) {
		$class = 'row1';
	} else {
		$class = 'row2';
	}
	$i += 1;
	?>
    <tr class="<?php echo $class; ?>" style="height:25px;">
      <td>&nbsp;<?php echo $cust_name; ?></td>
	  <td>&nbsp;<?php echo $meternum; ?></td>
      <td width="260" align="center"><?php echo $meter_cons; ?></td>
      <td width="139" align="center"><?php echo $unitprice; ?></td>
      <td width="150" align="center"><?php echo $meterpen; ?></td>
	  <td width="150" align="center"><?php echo $totprrice; ?></td>
	  <td width="150" align="center"><?php echo $dates; ?></td>
	  <td width="150" align="center"><a href="view.php?mod=customer&view=billPayment&billid=<?php echo $billid; ?>">Pay Now</a></td>
    </tr>
    <?php
	} // end while
	?>
    <tr>
      <td colspan="5">&nbsp;</td>
    </tr>
    <tr>
      <td colspan="5" align="right">&nbsp;</td>
    </tr>
  </table>
  <p>&nbsp;</p>
</form>
<p>&nbsp;</p>
