<?php
require_once("../../../includes/initialize.php");
//checkAdmin();
$view = (isset($_GET['view']) && $_GET['view'] != '') ? $_GET['view'] : '';

switch ($view) {
	case 'program' :
		$content    = 'program.php';		
		break;
		
	case 'assignteacher' :
		$content    = 'assignteacher.php';		
		break;

	case 'add' :
		$content    = 'add.php';		
		break;

	case 'edit' :
		$content    = 'edit.php';		
		break;
    case 'view' :
		$content    = 'view.php';		
		break;
	case 'sched' :
		$content    = 'sched.php';		
		break;
	

	default :
		$content    = 'select.php';		
}
require_once '../../theme/templates.php';

?>

