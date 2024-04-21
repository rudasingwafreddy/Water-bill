<?php 
$id = $_GET['id'];  
?>
<h3>Report - Admin View</h3>
<hr>
<form action="processLeave.php?action=addUser" method="post"  name="frmListUser" id="frmListUser">
  <table width="100%" border="0" align="center" cellpadding="2" cellspacing="1" class="text">
    <tr align="center" id="listTableHeader">
      <td width="583">owner</td>
	  <td width="583">Created By</td>
	  <td width="303">Meter Number </td>
	  <td width="303">Consumed </td>
      <td width="260">Price </td>
	  <td width="260">Penalty </td>
	  <td width="260">Total </td>
	  <td width="260">Date </td>
      
    </tr>
    <?php
	$sql = "SELECT *
			FROM tbl_bill
			WHERE status = '$id'
			ORDER BY dates DESC 
			LIMIT 0,20";
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
      <td width="303" align="center"><?php echo $empnames; ?></td>
      <td width="260" align="center"><?php echo $meternum; ?></td>
      <td width="150" align="center"><?php echo $meter_cons; ?></td>
	  <td width="150" align="center"><?php echo $unitprice; ?></td>
	  <td width="150" align="center"><?php echo $meterpen; ?></td>
	  <td width="150" align="center"><?php echo $totprrice; ?></td>
	  <td width="150" align="center"><?php echo $dates; ?></td>
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
