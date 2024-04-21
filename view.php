<?php
require_once './library/config.php';
require_once './library/functions.php';

//$_SESSION['login_return_url'] = $_SERVER['REQUEST_URI'];
checkUser();

$mod = (isset($_GET['mod']) && $_GET['mod'] != '') ? $_GET['mod'] : '';
$view = (isset($_GET['view']) && $_GET['view'] != '') ? $_GET['view'] : '';

if($mod == 'customer'){
	switch ($view) {		
	
		
		case 'checkbills' :
			$content 	= 'checkbills.php';		
			$pageTitle 	= 'Water Billing Management System - Check Bills';
		break;

		case 'requeststatus' :
			$content 	= 'requeststatus.php';		
			$pageTitle 	= 'Water Billing Management System - Meter request status';
		break;
		
		case 'billDetails' :
			$content 	= 'billDetails.php';		
			$pageTitle 	= 'Water Billing Management System - View Bill Detail';
		break;
		case 'billPayment' :
			$content 	= 'BillPaymentDetails.php';		
			$pageTitle 	= 'Water Billing Management System - View Bill Payment';
		break;
		
		case 'feedback' :
			$content 	= 'feedback.php';		
			$pageTitle 	= 'Water Billing Management System - Give Your Feedback';
		break;
		
	
	
	}//switch
}//if
elseif($mod == 'admin'){
	switch ($view) {
	
		case 'meterDetails' :
			$content 	= 'adminmeterDetails.php';		
			$pageTitle 	= 'Water Billing Management System - View Meter Detail';
		break;
	
		case 'adminmeterRequested' :
			$content 	= 'adminmeterRequested.php';		
			$pageTitle 	= 'Water Billing Management System - View Meter Requests';
		break;
		
		case 'repo' :
			$content 	= 'repo.php';		
			$pageTitle 	= 'Water Billing Management System - View Bill Detail';
		break;
		
		case 'repod' :
			$content 	= 'repo-detail.php';		
			$pageTitle 	= 'Water Billing Management System - Detail Reports';
		break;
		
		case 'reports' :
			$content 	= 'reports.php';		
			$pageTitle 	= 'Water Billing Management System - Reports';
		break;
		
		
		
		case 'vDetails' :
			$content 	= 'viewEnggDetails.php';		
			$pageTitle 	= 'Water Billing Management System - View Employees Details';
		break;
		
		case 'empDetails' :
			$content 	= 'empDetails.php';		
			$pageTitle 	= 'Water Billing Management System - View Employees Details';
		break;
		
		case 'custDetails' :
			$content 	= 'custDetails.php';		
			$pageTitle 	= 'Water Billing Management System - View Employees Details';
		break;
		
		
		case 'viewByCompID' :
			$content 	= 'viewByCompID.php';		
			$pageTitle 	= 'Water Billing Management System - Assign Meter';
		break;
		
		case 'doEdit' :
			$content 	= 'editEngg.php';		
			$pageTitle 	= 'Water Billing Management System - Edit Employee';
		break;
		
		case 'doEditCust' :
			$content 	= 'editCust.php';		
			$pageTitle 	= 'Water Billing Management System - Edit Customer';
		break;
		
		case 'addEmp' :
			$content 	= 'addEmp.php';		
			$pageTitle 	= 'Water Billing Management System - Add Employee';
		break;
		
		case 'addCust' :
			$content 	= 'addCust.php';		
			$pageTitle 	= 'Water Billing Management System - Add Customer';
		break;
	
	}//switch
}//if
elseif($mod == 'employee'){
	switch ($view) {
	
		case 'viewbill' :
			$content 	= 'employeeBillDetails.php';		
			$pageTitle 	= 'Water Billing Management System - View Bill Detail';
		break;
		
		case 'empcheckbills' :
			$content 	= 'Empcheckbills.php';		
			$pageTitle 	= 'Water Billing Management System - Check Bills';
		break;
		
		case 'billconfirm' :
			$content 	= 'BillPaymentConfirm.php';		
			$pageTitle 	= 'Water Billing Management System - Bill Confirm';
		break;
		
	
		
		case 'viewbillstatus' :
			$content 	= 'employeeBillstatus.php';		
			$pageTitle 	= 'Water Billing Management System - Change Bill Status';
		break;

	}//switch
}//if

require_once './include/template.php';

?>
