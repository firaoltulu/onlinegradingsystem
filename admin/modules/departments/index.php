<?php
require_once("../../../includes/initialize.php");
//checkAdmin();
$view = (isset($_GET['view']) && $_GET['view'] != '') ? $_GET['view'] : '';

switch ($view) {
	case 'list' :
		$content    = 'list.php';		
		break;

	case 'students' :
		$content    = 'students.php';		
		break;
   
	case 'semester' :
		$content    = 'semester.php';		
		break;
       
	case 'allcourses' :
		$content    = 'allcourses.php';		
		break; 
	case 'viewfaculty' :
		$content    = 'viewfaculty.php';		
		break;     
    case 'faculty' :
            $content    = 'faculty.php';		
            break;

	case 'editteacher' :
		$content    = 'editteacher.php';		
			break;
	case 'assign_head' :
			$content    = 'assign_head.php';		
			break;
	case 'head' :
			$content    = 'head.php';		
			break;
	default :
		$content    = 'select.php';		
}
require_once '../../theme/templates.php';

?>

