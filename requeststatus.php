<h3>Details - Meter request status</h3>
<hr>
<form action="" method="post"  name="frmListUser" id="frmListUser">
  <table width="680" border="0" align="center" cellpadding="2" cellspacing="1" class="text">
    <tr align="center" id="listTableHeader">
      <td width="453">Name </td>
      <td width="">Email</td>
      <td width="265">Mobile No. </td>
      <td width="207">Status</td>
    </tr>
    <?php
	$cust_id = (int)$_SESSION['user_id'];
	$sql = "SELECT * 
			FROM tbl_customer where cid = '$cust_id'";
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
      <td width="371" align="center"><?php echo $row['cname']; ?></td>
      <td width="265" align="center"><?php echo $row['email']; ?></td>
      <td>&nbsp;<?php echo $row['c_mobile'];  ?></td>
      <td width="207" align="center"><?php echo $row['status'];  ?></td>
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
