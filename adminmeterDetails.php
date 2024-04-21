<h3>Customer Details - Admin View</h3>
<hr>
<form action="processLeave.php?action=addUser" method="post"  name="frmListUser" id="frmListUser">
  <table width="100%" border="0" align="center" cellpadding="2" cellspacing="1" class="text">
    <tr align="center" id="listTableHeader">
      <td width="747">Customer Name</td>
      <td width="260">email </td>
      <td width="139">c_mobile</td>
      <td width="150">Detail</td>
    </tr>
    <?php
	$cust_id = (int)$_SESSION['user_id'];
	$sql = "SELECT * 
			FROM tbl_customer
			ORDER BY cid DESC 
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
      <td>&nbsp;<?php echo $cname; ?></td>
      <td width="260" align="center"><?php echo ucwords($email); ?></td>
      <td width="139" align="center"><?php echo ucwords($c_mobile); ?></td>
      <td width="150" align="center"><a href="javascript:viewComplainDetail(<?php echo $cid; ?>);">Detail</a></td>
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
