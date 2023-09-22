<?php 
require_once ("../../../includes/initialize.php");
$action = (isset($_GET['action']) && $_GET['action'] != '') ? $_GET['action'] : '';

switch ($action) {

	case 'add' :
	doInsert();
	break;
	
	case 'schedule' :
	doSchedule();
	break;

    case 'post' :
        doPost();
        break;
	
	case 'delete' :
	doDelete();
	break;


}

function doSchedule(){
    global $mydb;
    if (isset($_POST['schedule'])){

		if($_POST['reg_day'] == "" OR $_POST['reg_end_day'] == "" OR $_POST['start_day'] == ""){
			message("Cannot live any field null!","error");
				redirect('index.php?view=sched');	
		}
        else{
            if($_POST['reg_day'] >= $_POST['reg_end_day'] OR $_POST['reg_end_day']>$_POST['start_day']){
              
            echo "not";
            }
            else{

                $date = strtotime($_POST['start_day']);
                $str = strtotime("+3 Months",$date);
                $d=date("Y-m-d", $str);
                echo  $d;

                $sql = "update  `unity_schedule` set `registration_begin_day` = '{$_POST['reg_day']}',
                 `registration_end_day` = '{$_POST['reg_end_day']}', `class_start_day` ='{$_POST['start_day']}',
                  `final_start_day` ='{$d}' WHERE `id` = 1";
                $mydb->setQuery($sql);
                $mydb->executeQuery();
                
                message("Registration and class start day has been registered successfully!","success");
                redirect('index.php?');


            }
     
        }

    }

}
?>