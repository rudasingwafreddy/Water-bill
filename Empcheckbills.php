<h3>Employees Check Bills</h3>
<hr>
<form action="processLeave.php?action=addUser" method="post"  name="frmListUser" id="frmListUser">
<style>
#stat
{
color:#FF0000;
}
</style>
  <table width="100%" border="0" align="center" cellpadding="2" cellspacing="1" class="text">
    <tr align="center" id="listTableHeader">
      <td width="447">Customer</td>
	  <td width="260">Meter </td>
      <td width="260">Quantity </td>
      <td width="139">Price</td>
	  <td width="139">Penalty</td>
      <td width="150">Total </td>
	  
	  <td width="150">Date </td>
	  <td width="150">Status </td>
    </tr>
    <?php
	$cust_id = (int)$_SESSION['user_id'];
	$sql = "SELECT * FROM tbl_bill 
			WHERE empid = $cust_id";
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
	  <td width="150" align="center"><p id="stat"><strong><?php echo $status; ?></strong></p></td>
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
