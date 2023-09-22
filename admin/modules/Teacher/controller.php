<?php 
require_once ("../../../includes/initialize.php");
$action = (isset($_GET['action']) && $_GET['action'] != '') ? $_GET['action'] : '';

switch ($action) {
	case 'add' :
	doInsert();
	break;
	
	case 'edit' :
	doEdit();
	break;
	
	case 'delete' :
	doDelete();
	break;
}

function doInsert(){
    $department = (isset($_GET['department']) && $_GET['department'] != '') ? $_GET['department'] : '';
    if (isset($_POST['saveteacher'])){
        if ($_POST['first_name'] == "" OR $_POST['middle_name'] == "" OR $_POST['last_name'] == "" OR $_POST['field_of_study'] == ""  OR $_POST['level_of_study'] == ""
        OR $_POST['age'] == "" OR $_POST['gender'] == "" OR $_POST['position'] == "") {
            message("All field is required!","error");
            check_message();
            redirect('index.php?view=add&department='.$department);
        
        }
        else{

            $tech = new Teacher();
            if($department==$_SESSION['department_name']){

                $first_name	    	= $_POST['first_name'];
				$middle_name      	= $_POST['middle_name'];
				$last_name	 	    = $_POST['last_name'];
				$field_of_study 	= $_POST['field_of_study'];
				$level_of_study		= $_POST['level_of_study'];
                $age	         	= $_POST['age'];
                $gender	         	= $_POST['gender'];
                $position		   = $_POST['position'];
				$department 			= $department;

                $tech->first_name	    =$first_name	 ;
                $tech->middle_name       = $middle_name  ;
                $tech->last_name	 	= $last_name;
                $tech->field_of_study   =$field_of_study;
                $tech->level_of_study   =$level_of_study;	
                $tech->age	             = $age;
                $tech->gender	        =   $gender	 ;
                $tech->position		    = $position	;
                $tech->department 	    = $department ;
                $istrue = $tech->create();

                if ($istrue == 1){
                    
                    message("New Faculty Member is created successfully!","success");
                    redirect('index.php?view=list');
                }

            }
            else{

                     message("404 FILE NOT FOUND","error");
			         	check_message();
						 redirect('index.php?view=add&department='.$department);
            }

        }

    }
}

?>