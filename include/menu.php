<?php
if($_SESSION['user_type'] == 'customer'){
?>
<div id="ddblueblockmenu">
	  <div class="menutitle">Customer Menu</div>
		  <ul>
			<li><a href="<?php echo WEB_ROOT; ?>">Welcome,&nbsp;</a></li>
			<?php
			$cid = $_SESSION['user_id'];
			$sql = "SELECT * FROM tbl_customer
			WHERE cid = $cid and status='initial'";
	$result = dbQuery($sql);
	if($row = dbFetchAssoc($result)) {
		?>
<li><a href="<?php echo WEB_ROOT; ?>request.php?id=<?=$cid?>">Request meter</a></li>
		<?php
	}

	$sql = "SELECT * FROM tbl_customer
			WHERE cid = $cid and status='Requested'";
	$result = dbQuery($sql);
	if($row = dbFetchAssoc($result)) {
		?>
<li><a href="<?php echo WEB_ROOT; ?>view.php?mod=customer&view=requeststatus&id=<?=$cid?>">Request status</a></li>
		<?php
	}
			?>
			<li><a href="<?php echo WEB_ROOT; ?>view.php?mod=customer&view=billDetails">Bill Payment</a></li>			
			<li><a href="<?php echo WEB_ROOT; ?>view.php?mod=customer&view=checkbills">Bills Status</a></li>
			<li><a href="<?php echo WEB_ROOT; ?>index.php?page=about">About</a></li>
			
			
			<li><a href="<?php echo $self; ?>?logOut=1">Logout</a></li>
		  </ul>
	  <div class="menutitle">&nbsp;</div>	  
</div>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<?php 
}else if($_SESSION['user_type'] == 'employee'){
?>
<div id="ddblueblockmenu">
	  <div class="menutitle">Employees Menu</div>
		  <ul>
			<li><a href="<?php echo WEB_ROOT; ?>">Welcome,&nbsp;<?php //echo ucwords($_SESSION['user_name']); ?></a></li>			
			<li><a href="<?php echo WEB_ROOT; ?>view.php?mod=employee&view=viewbill">Customer Bill</a></li>
			<li><a href="<?php echo WEB_ROOT; ?>view.php?mod=employee&view=viewbillstatus">Bill In Process</a></li>
			<li><a href="<?php echo WEB_ROOT; ?>view.php?mod=employee&view=empcheckbills">Check Bills</a></li>
			<li><a href="<?php echo WEB_ROOT; ?>index.php?page=about">About</a></li>
			<li><a href="<?php echo $self; ?>?logOut=1">Logout</a></li>
		  </ul>
	  <div class="menutitle">&nbsp;</div>	  
</div>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
	 
<?php 
}else if($_SESSION['user_type'] == 'admin'){
?>
<div id="ddblueblockmenu">
	  <div class="menutitle">Admin Menu</div>
		  <ul>
			<li><a href="<?php echo WEB_ROOT; ?>">Welcome,&nbsp;<? echo ucwords($_SESSION['user_name']); ?></a></li>
			<li><a href="<?php echo WEB_ROOT; ?>view.php?mod=admin&view=meterDetails">Assign Meter Number</a></li>
			<li><a href="<?php echo WEB_ROOT; ?>view.php?mod=admin&view=adminmeterRequested">Meter requests</a></li>
			
			<li><a href="<?php echo WEB_ROOT; ?>view.php?mod=admin&view=empDetails">Employees Details</a></li>
			<li><a href="<?php echo WEB_ROOT; ?>view.php?mod=admin&view=custDetails">Customer Details</a></li>
			<li><a href="<?php echo WEB_ROOT; ?>view.php?mod=admin&view=reports">Reports</a></li>
			<li><a href="<?php echo WEB_ROOT; ?>index.php?page=about">About</a></li>
			<li><a href="<?php echo $self; ?>?logOut=1">Logout</a></li>
		  </ul>
	  <div class="menutitle">&nbsp;</div>	  
</div>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<?php 
}
?>