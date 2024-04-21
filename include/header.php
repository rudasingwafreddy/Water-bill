<html>
<head>
<title><?php echo $pageTitle; ?></title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<link href="<?php echo WEB_ROOT;?>admin/include/admin.css" rel="stylesheet" type="text/css">
<link href="<?php echo WEB_ROOT;?>include/style.css" rel="stylesheet" type="text/css">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  
<script language="JavaScript" type="text/javascript" src="<?php echo WEB_ROOT;?>admin/library/common.js"></script>
<?php
$n = count($script);
for ($i = 0; $i < $n; $i++) {
	if ($script[$i] != '') {
		echo '<script language="JavaScript" type="text/javascript" src="' . WEB_ROOT. 'admin/library/' . $script[$i]. '"></script>';
	}
}
?>

<style>
    input[type="text"] {
    padding: 5px;
	border:2px solid #e5e5;
	border-radius:5px;
}
</style>
</head>

<body>
<br>
<table width="700" border="0" align="center" cellpadding="2" cellspacing="1">
 <tr align="center"> 
  <td width="20%" class="nav"><a href="<?php echo WEB_ROOT;?>admin/index.php" class="nav">HOME</a></td>
  <td width="20%" class="nav"><a href="<?php echo WEB_ROOT;?>admin/category/index.php" class="nav">CATEGORY</a></td>
  <td width="20%" class="nav"><a href="<?php echo WEB_ROOT;?>admin/product/index.php" class="nav">PRODUCT</a></td>
  <td width="20%" class="nav"><a href="<?php echo WEB_ROOT;?>admin/orders/index.php" class="nav">ORDERS</a></td>
  <td width="20%" class="nav"><a href="<?php echo WEB_ROOT;?>admin/shop/index.php" class="nav">SHOP CONFIG</a></td>  
 </tr>
</table>
<p>&nbsp;</p>