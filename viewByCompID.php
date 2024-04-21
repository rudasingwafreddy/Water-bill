<?php
$cid = (int)$_GET['compId'];
$sql = "SELECT * FROM tbl_customer,tbl_meter
		WHERE cid = $cid and tbl_meter.cust_id=tbl_customer.cid";
$result = dbQuery($sql);
if($row = dbFetchAssoc($result)) {
extract($row);
?>
<form action="process.php?action=updatemeter" method="post">
<table width="600" border="0" align="center" cellpadding="5" cellspacing="1" bgcolor="#336699" class="entryTable">
  <tr id="entryTableHeader">
    <td>:: View Complains Details::</td>
  </tr>
  <tr>
    <td class="contentArea"><div class="errorMessage" align="center"></div>
        <table width="100%" border="0" cellpadding="2" cellspacing="1" class="text">
          <tr align="center">
            <td colspan="2">
			<input type="hidden" name="compId" value="<?php echo $cid; ?>"/><input type="hidden" name="custn" value="<?php echo $cname; ?>"/>	<input type="hidden" name="meterid" value="<?php echo $row['mid']; ?>"/>			</td>
          </tr>
          <tr class="entryTable">
            <td class="label">&nbsp;Customer Name </td>
            <td class="content"><font color="#0066FF"><b><?php echo ucwords($cname); ?></b></font></td>
          </tr>
          <tr class="entryTable">
            <td class="label">&nbsp;Customer Phone </td>
            <td class="content"><font color="#FF0000"><b><?php echo $c_mobile; ?></b></font></td>
          </tr>

          <tr class="entryTable">
            <td valign="top" class="label">&nbsp;Meter Description .</td>
            <td class="content">
			<textarea name="compDesc" cols="50" rows="6" class="box" id="compDesc"  ><?=$row['comp_desc']?></textarea></td>
          </tr>
         
          <tr>
            <td valign="top" class="label">&nbsp;Meter Number</td>
            <td class="content">
			<input type="text" name="metern" value="<?=$row['meterNum']?>"/>			</td>
          </tr>
          
		 
          
		  <tr>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
          </tr>
          <tr>
            <td width="200">&nbsp;</td>
            <td width="372">&nbsp;</td>
          </tr>
          <tr>
            <td>&nbsp;</td>
            <td><input name="btnLogin" type="submit" id="btnLogin" value=" Update "></td>
          </tr>
      </table></td>
  </tr>
</table>
</form>
<?php 
}else{
  $sql = "SELECT * FROM tbl_customer
		WHERE cid = $cid";
$result = dbQuery($sql);
if($row = dbFetchAssoc($result)) {
extract($row);
?>
<form action="process.php?action=assignmeter" method="post">
<table width="600" border="0" align="center" cellpadding="5" cellspacing="1" bgcolor="#336699" class="entryTable">
  <tr id="entryTableHeader">
    <td>:: View Complains Details::</td>
  </tr>
  <tr>
    <td class="contentArea"><div class="errorMessage" align="center"></div>
        <table width="100%" border="0" cellpadding="2" cellspacing="1" class="text">
          <tr align="center">
            <td colspan="2">
			<input type="hidden" name="compId" value="<?php echo $cid; ?>"/><input type="hidden" name="custn" value="<?php echo $cname; ?>"/>			</td>
          </tr>
          <tr class="entryTable">
            <td class="label">&nbsp;Customer Name </td>
            <td class="content"><font color="#0066FF"><b><?php echo ucwords($cname); ?></b></font></td>
          </tr>
          <tr class="entryTable">
            <td class="label">&nbsp;Customer Phone </td>
            <td class="content"><font color="#FF0000"><b><?php echo $c_mobile; ?></b></font></td>
          </tr>

          <tr class="entryTable">
            <td valign="top" class="label">&nbsp;Meter Description .</td>
            <td class="content">
			<textarea name="compDesc" cols="50" rows="6" class="box" id="compDesc"  ></textarea></td>
          </tr>
         
          <tr>
            <td valign="top" class="label">&nbsp;Meter Number</td>
            <td class="content">
			<input type="text" name="metern" />			</td>
          </tr>
          
		 
          
		  <tr>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
          </tr>
          <tr>
            <td width="200">&nbsp;</td>
            <td width="372">&nbsp;</td>
          </tr>
          <tr>
            <td>&nbsp;</td>
            <td><input name="btnLogin" type="submit" id="btnLogin" value=" Assing Meter "></td>
          </tr>
      </table></td>
  </tr>
</table>
</form>
<?php 
}//while
}
?>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>