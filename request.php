<?php
$dbHost = 'localhost';
$dbUser = 'root';
$dbPass = '';
$dbName = 'waterb_db';

// Establishing the connection
$dbConn = mysqli_connect($dbHost, $dbUser, $dbPass, $dbName) or die('MySQL connect failed. ' . mysqli_connect_error());

// Sanitize the input
$id = mysqli_real_escape_string($dbConn, $_GET['id']);

// Performing the update
$sql2 = "UPDATE tbl_customer SET status='Requested' WHERE cid='$id'";
mysqli_query($dbConn, $sql2) or die('Query execution failed. ' . mysqli_error($dbConn));

// Redirecting to view.php after the update
header("location: view.php?mod=customer&view=billDetails");
exit();
?>
