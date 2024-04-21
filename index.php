<?php
ini_set('display_startup_errors', 1);
ini_set('display_errors', 1);
error_reporting(-1);

require_once './library/config.php';
require_once './library/functions.php';

checkUser();

if(isset($_GET['page'])){
    $content = 'about.php';
}
else{
    $content = 'main.php';
}

$pageTitle = 'Water Billing Management System';
//$script = array();

require_once 'include/template.php';
?>
